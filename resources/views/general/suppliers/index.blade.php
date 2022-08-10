@extends('layouts/contentLayoutMaster')

@section('title', 'Add Suppliers Information')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection

@section('page-style')
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-pickadate.css')) }}">
{{-- Page Css files --}}
<link rel="stylesheet" type="text/css" href="{{asset('css/base/plugins/forms/pickers/form-flat-pickr.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection


@section('content')



<!-- Basic multiple Column Form section start -->
<section id="ajax-datatable">
  <div class="row">
    <div class="col-12">
      <div class="card">
         <!-- Button trigger modal -->
         <div class="card-header border-bottom">
          <h4 class="card-title">Add Suppliers Info</h4>
           <a type="button" class="btn btn-relief-primary click_if_invalid" data-bs-toggle="modal" data-bs-target="#large" href="javascript:void(0)" id="add_new_btn">Add New</a>
        </div>
              <!-- Modal -->
              <div
                class="modal fade text-start"
                id="ajax_model"
                tabindex="-1"
                aria-labelledby="myModalLabel17"
                aria-hidden="true">
					      <form class="supplier_form" id="supplier_form" method="post" action="{{route('suppliers.store')}}" novalidate>
                  @csrf
					      	<input type="hidden" name="supplier_id" id="supplier_id">
                  <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="model_heading">Add Suppliers Info</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <section id="">
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                            
                              <div class="card-body">
                                <form class="form">
                                  <div class="row">
                                    
                                    <div class="col-md-12 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">Supplier Name*</label>
                                        <input
                                          type="text"
                                          id="name"
                                          class="form-control mt-1"
                                          name="name"
                                          value=""
                                          placeholder="Supplier Name*"
                                        />
                                        <small class="text-danger error-message" id="name_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">Company Name*</label>
                                        <input
                                          type="text"
                                          id="company_name"
                                          class="form-control mt-1"
                                          name="company_name"
                                          value=""
                                          placeholder="Company Name*"
                                        />
                                        <small class="text-danger error-message" id="company_name_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">Contact-1*</label>
                                        <input
                                          type="text"
                                          id="contact"
                                          class="form-control mt-1"
                                          name="contact"
                                          value=""
                                          placeholder="Contact number*"
                                        />
                                        <small class="text-danger error-message" id="contact_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">Contact-2*</label>
                                        <input
                                          type="text"
                                          id="contact_1"
                                          class="form-control mt-1"
                                          name="contact_1"
                                          value=""
                                          placeholder="Contact number*"
                                        />
                                        <small class="text-danger error-message" id="contact_1_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">Address*</label>
                                        <input
                                          type="text"
                                          id="address"
                                          class="form-control mt-1"
                                          name="address"
                                          value=""
                                          placeholder="Address*"
                                        />
                                        <small class="text-danger error-message" id="address_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">City Name*</label>
                                        <input
                                          type="text"
                                          id="city"
                                          class="form-control mt-1"
                                          name="city"
                                          value=""
                                          placeholder="City Name*"
                                        />
                                        <small class="text-danger error-message" id="city_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                      <div class="mb-1">
                                        <label class="" for="">Email*</label>
                                        <input
                                          type="email"
                                          id="email"
                                          class="form-control mt-1"
                                          name="email"
                                          value=""
                                          placeholder="Enter Email*"
                                        />
                                        <small class="text-danger error-message" id="email_error"></small>
                                      </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                    
                                        <label class="" for="">Description*</label>
                                        <textarea
                                            class="form-control mt-1"
                                            id="description"
                                            rows="3"
                                            name="description"
                                            placeholder="Description"
                                          ></textarea>
                                          <small class="text-danger error-message" id="description_error"></small>

                                    </div>
                                        
                                    
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>

                          
                        </div>
                      </section>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="save_btn">Save</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
        
        <!--  -->
        <div class="card-datatable">
          <table class="data-table table">
            <thead>
              <tr>
                <th>Sr#</th>
                <th>Supplier Name</th>
                <th>Company Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>City Name</th>
                <th>Email</th>        
                <th>Action</th>
              </tr>
            </thead>
            <tbody> 
					
		    </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Basic Floating Label Form section end -->
@endsection 

@section('page-script')
<script type="text/javascript">
var table;
var jqForm = $('#supplier_form');
$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('suppliers.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'company_name', name: 'company_name'},
            {data: 'contact', name: 'contact'},
            {data: 'address', name: 'address'},
            {data: 'city', name: 'city'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    //open modal when add new btn clicked
    $('#add_new_btn').click(function () {
        // $('#save_btn').val("create-book");
        $('#supplier_id').val(''); //empty the PK
        jqForm.trigger("reset");
        $('#model_heading').html("Create New");

        $('#ajax_model').modal('show');
    });

    //open modal when edit btn clicked
    $('body').on('click', '.edit-btn', function () {
      var supplier_id = $(this).data('id');
      $.get("{{ route('suppliers.index') }}" +'/' + supplier_id +'/edit', function (data) {
          $('#model_heading').html("Edit");
        //   $('#save_btn').val("edit-book");
          $('#ajax_model').modal('show');
          //filling the form
          $('#supplier_id').val(data.id);
          $('#name').val(data.name);
          $('#company_name').val(data.company_name);
          $('#contact').val(data.contact);
          $('#contact_1').val(data.contact_1);
          $('#address').val(data.address);
          $('#city').val(data.city);
          $('#email').val(data.email);
          $('#description').val(data.description);


        })
    });

   $('#save_btn').click(function(e) {
        e.preventDefault();

        $(this).html('Save');

        //removing previous validation errors if wny
        remove_error_msg();

        //checking if form is valid
        if (jqForm.valid()) {

                $.ajax({
                    data: jqForm.serialize(),
                    url: jqForm.attr("action"),
                    type: "POST",
                    dataType: 'json',
                    success: function(response) {

                        //if form is successfuly saved
                        if (response.success == true) {

                            reset_form(jqForm);//reseting for the new entry

                            $('#ajax_model').modal('hide');
                            table.draw();
                            //alert
                            toastr['success']('👋 Suppliers saved', 'Success!', {
                                closeButton: true,
                                tapToDismiss: false,
                            });

                        } else {//if not saved
                            display_validation_errors(response.data); //server side errors
                        }
                    },
                    error: function(data){
                        console.log('Error:', data);
                        $('#save_btn').html('Save');
                        toastr['error']('👋 Unable to send request', 'Error!', {
                            closeButton: true,
                            tapToDismiss: false,
                        });
                    }
                });
            } else {
                toastr['error']('👋 Validation Error', 'Error!', {
                    closeButton: true,
                    tapToDismiss: false,
                });
            }
        });
    });

    $('body').on('click', '.delete-btn', function () {

        var id = $(this).data("id"); //PK

        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        customClass: {
          confirmButton: 'btn btn-primary',
          cancelButton: 'btn btn-outline-danger ms-1'
        },
        buttonsStyling: false
      }).then(function (result) {

        if (result.value) {

            $.ajax({
                type: "DELETE",
                url: "{{ route('suppliers.store') }}"+'/'+id, //PK
                success: function (data) {
                    table.draw(); //needs to resolve
                    Swal.fire({
                        icon: 'success',
                        title: 'Deleted!',
                        text: 'Your file has been deleted.',
                        customClass: {
                        confirmButton: 'btn btn-success'
                        }
                    });
                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });

        }
      }); //delete click end

}); //document ready ends

//jquery form validation
$(function () {
    'use strict';

    // jQuery Validation
    // --------------------------------------------------------------------
    if (jqForm.length) {
        jqForm.validate({
            rules: {
            'name': {
                required: true
            },
            'company_name': {
                required: true,
            },
            'contact': {
                required: true,
            },
            'contact_1': {
                required: true,
            },
            'address': {
                required: true,
            },
            'city': {
                required: true,
            },
            'email': {
                required: true,
            },
            'description': {
                required: true
            }
            }
        });
    }

});

</script>
@endsection