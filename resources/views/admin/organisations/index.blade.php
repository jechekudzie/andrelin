@extends('layouts.admin')

@section('content')

    <div class="pb-5">
        <div class="row g-4">
            <div class="col-12 col-xxl-12">
                <div class="mb-8">
                    <h2 class="mb-2">Company overview</h2>
                    <h5 class="text-700 fw-semi-bold">The hierarchy for ANDRELIN ENTERPRISES.</h5>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary px-5" href="{{route('admin.organisation-types.index')}}">
                        <i class="fa-solid fa-plus me-2"></i>
                        Refresh
                    </a>

                    <a class="btn btn-primary px-5" href="#">
                        <i class="fa-solid fa-plus me-2"></i>
                        Add new project
                    </a>
                </div>

                <br/>
                <div id="messageContainer"></div>
                <div id="errorContainer"></div>
                <!-- Start custom content -->
                <div class="row g-4">
                    <div class="col-4 col-xl-4">
                        <div class="mb-9">
                            <div class="card shadow-none border border-300 my-4"
                                 data-component-card="data-component-card">
                                <div class="card-header p-4 border-bottom border-300 bg-soft">
                                    <div class="row g-3 justify-content-between align-items-center">
                                        <div class="col-12 col-md">
                                            <h4 class="text-900 mb-0" data-anchor="data-anchor">Structure</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-4 code-to-copy">
                                        <!--start tree-->
                                        <div id="tree"></div>
                                        <!--end tree-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-8 col-xl-8 ">
                        <div class="mb-9">
                            <div class="card shadow-none border border-300 my-4"
                                 data-component-card="data-component-card">
                                <div class="card-header p-4 border-bottom border-300 bg-soft">
                                    <div class="row g-3 justify-content-between align-items-center">
                                        <div class="col-12 col-md">
                                            <h4 class="text-900 mb-0 card-title" data-anchor="data-anchor">Add new subsidiary</h4>
                                            <p style="font-size: 15px;color: red;"><i class="fa fa-arrow-left"></i>
                                                Select an
                                                organisation type</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-4 code-to-copy">
                                        <form id="organisationForm" action="" method="post"
                                              enctype="multipart/form-data">
                                            <input type="hidden" name="_method" value="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label class="form-label" for="exampleFormControlInput">Subsidiary</label>
                                                <input class="form-control" name="name" id="name" type="text"
                                                       placeholder="Enter name"/>
                                            </div>
                                            <div class="mb-0">
                                                <label class="form-label" for="exampleTextarea">Describe Organisation Type</label>
                                                <textarea name="description" class="form-control" id="description" rows="4"></textarea>
                                            </div>

                                            <!-- Make sure the name attribute matches your database column name -->
                                            <input type="hidden" name="parent_id" value="" id="parent_id">
                                            <input type="hidden" name="parent_name" value="" id="parent_name">
                                            <input type="hidden" name="organisation_type" value="" id="organisation_type">
                                            <input type="hidden" name="organisation_type_id" value="" id="organisation_type_id">

                                            <hr/>

                                            <div class="col-12 gy-6">
                                                <div class="row g-3 justify-content-end">
                                                    <div class="col-auto">
                                                        <button class="btn btn-primary px-5 px-sm-15" id="submit-button">Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- end custom content -->

            </div>


        </div>
    </div>

    <script>

        $(document).ready(function () {
            //set up laravel ajax csrf token
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });

            var tree = $('#tree').tree({
                primaryKey: 'id',
                dataSource: '/api/admin/organisations',
                uiLibrary: 'bootstrap4',
                cascadeCheck: false,
            });

            function fetchOrganisation(organisation) {
                $.ajax({
                    url: '/api/admin/organisations/' + organisation + '/edit',
                    type: 'GET',
                    success: function (data) {
                        $('#fieldName').val(data.name);
                        $('#fieldDescription').val(data.description);
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            }

            function clearOrganisationTypeFields() {
                $('#fieldName').val('');
                $('#fieldDescription').val('');
            }

            var organisationForm = $('#organisationForm');
            var manageOrganisation = $('#manageOrganisation');
            var manageUsers = $('#manageUsers');
            organisationForm.hide();
            manageOrganisation.hide();
            manageUsers.hide();

            let [rand, type, organisation_id] = [null, null, null];

            var hiddenNodeIdField = $('#hiddenNodeId');
            var checkedNodeNameElement = $('#checkedNodeName');

            let parentId = null;
            let parentName = null;
            let primaryNodeId = null;
            let nodeName = null;
            let organisationID = null;
            let organisationType = null;
            let organisationName = null;
            let organisationSlug = null;
            let typeName = null;
            let typeId = null;
            let actionUrl = null;
            actionUrl = '/admin/organisations/store';

            var submitButton = $('#submit-button');
            var cardTitle = $('#card-title');
            var pageTitle = $('#page-title');



            // Handle node selection
            tree.on('select', function (e, $node, id) {
                saveSelectedNodeId(id);
                var nodeData = tree.getDataById(id);

                if (nodeData) {
                    primaryNodeId = nodeData.id;
                    nodeName = nodeData.text;
                    parentId = nodeData.parentId;
                    parentName = nodeData.parentName;
                    typeName = nodeData.type;
                    typeId = nodeData.type_id;

                    [rand, type, organisation_id] = nodeData.id.split('-');

                    organisationID = organisation_id;
                    organisationType = type;
                    organisationName = nodeName;
                    organisationSlug = nodeData.slug;

                    cardTitle.text('Add - ' + organisationName + ' for ' + parentName);
                    pageTitle.text('Add - ' + organisationName);

                    /* alert('Parent id '+ parentId + ' and Parent Name '+ parentName + ' Type id '+ typeId + ' and Type Name '+ typeName);*/

                    submitButton.text('Add ' + organisationName + ' New');
                    $('#parent_id').val(parentId);
                    $('#parent_name').val(parentName);
                    $('#organisation_type').val(typeName);
                    $('#organisation_type_id').val(typeId);

                    if (organisationType === 'ot') {
                        organisationForm.show();
                        $('input[name="_method"]').val('POST');
                        clearOrganisationTypeFields();
                        $('#organisationForm').attr('action', '/admin/organisations/store');
                        actionUrl = '/admin/organisations/store';
                        manageOrganisation.hide();
                    }

                    if (organisationType === 'o') {
                        organisationForm.show();
                        $('#organisationForm').attr('action', '/admin/organisations/' + organisationSlug + '/update');
                        actionUrl = '/admin/organisations/' + organisationSlug + '/update';
                        $('input[name="_method"]').val('PATCH');
                        submitButton.text('Update ' + organisationName);

                        cardTitle.text('Edit - ' + organisationName);
                        fetchOrganisation(organisationSlug);
                    }

                    hiddenNodeIdField.val(primaryNodeId);
                    checkedNodeNameElement.text(nodeName);
                }
            });

            tree.on('unselect', function (e, node, id) {
                actionUrl = '/admin/organisations/store';
                organisationForm.hide();
                clearSavedNodeId();
            });


            $('#organisationForm').submit(function (event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = $(this).serialize(); // Serialize the form data

                $.ajax({
                    type: 'POST',
                    url: actionUrl, // The URL to the server-side script that will process the form data
                    data: formData,
                    success: function (response) {
                        $('#organisationForm').trigger('reset');
                        treeReloaded = true;
                        tree.reload();

                        if (response.success) {
                            // Display success message
                            $('#messageContainer').html('<div class="alert alert-outline-success d-flex align-items-center" role="alert">' +
                                '<span class="fas fa-check-circle text-success fs-3 me-3"></span>' +
                                '<p class="mb-0 flex-1">' + response.message + '</p>' +
                                '<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>' +
                                '</div>');
                        }

                        // Set a timeout to hide the message container after 5000 milliseconds
                        setTimeout(function() {
                            $('#messageContainer').fadeOut('slow');
                        }, 5000); // 5000 milliseconds = 5 seconds
                    },
                    error: function(xhr) { // Added 'xhr' parameter to access response
                        if (xhr.status === 422) { // Validation Error
                            var errors = xhr.responseJSON.errors;
                            var errorsHtml = '';
                            $.each(errors, function(key, value) {
                                errorsHtml += '<div class="alert alert-outline-danger d-flex align-items-center" role="alert">' +
                                    '<span class="fas fa-times-circle text-danger fs-3 me-3"></span>' +
                                    '<p class="mb-0 flex-1">' + value[0] + '</p>' + // Use 'value[0]' as the message
                                    '<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>' +
                                    '</div>';
                            });
                            $('#errorContainer').html(errorsHtml);
                            //Set a timeout to hide the message container after 5000 milliseconds
                            setTimeout(function() {
                                $('#errorContainer').fadeOut('slow');
                            }, 5000); // 5000 milliseconds = 5 seconds
                        } else {
                            // Handle other kinds of errors
                            console.error('An error occurred while submitting the form.');
                        }
                    }
                });
            });


            var treeReloaded = true; // Flag to check if tree has been reloaded

            // Function to save selected node ID to local storage
            function saveSelectedNodeId(nodeId) {
                localStorage.setItem('selectedNodeId', nodeId);
            }

            // Function to get selected node ID from local storage
            function getSelectedNodeId() {
                return localStorage.getItem('selectedNodeId');
            }

            // Function to clear the saved node ID from local storage
            function clearSavedNodeId() {
                localStorage.removeItem('selectedNodeId');
            }

            // Function to expand from root to a given node
            function expandFromRootToNode(nodeId) {
                var parents = tree.parents(nodeId);
                if (parents && parents.length) {
                    parents.reverse().forEach(function(parentId) {
                        tree.expand(parentId);
                    });
                }
                tree.expand(nodeId);
            }

            // Function to select and expand from root to a node by ID
            function selectAndExpandFromRootToNode(nodeId) {
                console.log("Selecting and expanding node: ", nodeId);
                var nodeToSelect = tree.getNodeById(nodeId);
                if (nodeToSelect) {
                    tree.select(nodeToSelect);  // Selects the node
                    expandFromRootToNode(nodeId);  // Expands from root to the node
                } else {
                    console.log("Node not found: ", nodeId);
                }
            }

            // Select and expand from root to the node if it's saved in local storage
            var savedNodeId = getSelectedNodeId();
            if (savedNodeId) {
                selectAndExpandFromRootToNode(savedNodeId);
            }

            // Event listener for node selection
            tree.on('select', function (e, node, id) {
                saveSelectedNodeId(id);
            });

            // Event listener for node unselection (if applicable)
            // Replace 'unselect' with the correct event name if different
            tree.on('unselect', function (e, node, id) {
                clearSavedNodeId();
            });

            // Handle the dataBound event
            tree.on('dataBound', function() {
                if (treeReloaded) {
                    var savedNodeId = getSelectedNodeId();
                    if (savedNodeId) {
                        selectAndExpandFromRootToNode(savedNodeId);
                    }
                    // Reset the flag
                    treeReloaded = false;
                }
            });

        });

    </script>

@endsection
