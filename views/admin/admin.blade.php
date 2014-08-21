@extends('layouts.default')

@section('content')

<div class="container padded">
    
    <div class="row">
        <div class="col-sm-4">
            <div class="list-group">
              <a href="#" class="list-group-item active">
                Admin Menu
              </a>
              <a href="#" class="list-group-item">Member</a>              
              <a href="#" class="list-group-item">Client</a>
              <a href="#" class="list-group-item">News</a>
                <a href="#" class="list-group-item">Projects</a>
              <a href="#" class="list-group-item">Page</a>
            </div>
        </div>
        
        <!--Add Member Form-->
        <div class="col-sm-8">
            <form class="form-horizontal">
                <fieldset>

                <!-- Form Name -->
                <legend>Add Member</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="member-name">Name</label>  
                  <div class="col-md-5">
                  <input id="member-name" name="member-name" type="text" placeholder="Name" class="form-control input-md" required="">

                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="description">Description</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="member-img">Add Image</label>
                  <div class="col-md-4">
                    <input id="member-img" name="member-img" class="input-file" type="file">
                  </div>
                </div>
                 <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Save"></label>
                  <div class="col-md-8">
                    <button id="member-save" name="Save" class="btn btn-primary">Save</button>
                    <button id="Cancel" name="Cancel" class="btn btn-danger">Cancel</button>
                  </div>
                </div>

                </fieldset>
             </form>
        </div>
        <!--end of Add member-->
        
        <!--Service Form-->
        <div class="col-sm-8">
            <form class="form-horizontal">
                <fieldset>

                <!-- Form Name -->
                <legend>Service</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="service-title">Title</label>  
                  <div class="col-md-5">
                  <input id="service-title" name="service-title" type="text" placeholder="" class="form-control input-md" required="">

                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="description">Description</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Save"></label>
                  <div class="col-md-8">
                    <button id="service-save" name="Save" class="btn btn-primary">Save</button>
                    <button id="Cancel" name="Cancel" class="btn btn-danger">Cancel</button>
                  </div>
                </div>

                </fieldset>
            </form>

            
        </div>
        <!--end of Service member-->
        
        <!--Client Form-->
        <div class="col-sm-8">
            
        </div>
        <!--end of Client member-->
        
        <!--News Form-->
        <div class="col-sm-8">
            
        </div>
        <!--end of News member-->
        
        <!--project Form-->
        <div class="col-sm-8">
            
            <form class="form-horizontal">
                <fieldset>

                <!-- Form Name -->
                <legend>Project</legend>

                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Project-title">Title</label>  
                  <div class="col-md-5">
                  <input id="Project-title" name="Project-title" type="text" placeholder="" class="form-control input-md" required="">

                  </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="project-description">Description</label>
                  <div class="col-md-4">                     
                    <textarea class="form-control" id="project-description" name="project-description"></textarea>
                  </div>
                </div>

                <!-- File Button --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="project-img">Add Image</label>
                  <div class="col-md-4">
                    <input id="project-img" name="project-img" class="input-file" type="file">
                  </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-4 control-label" for="Save"></label>
                  <div class="col-md-8">
                    <button id="Save" name="Save" class="btn btn-primary">Save</button>
                    <button id="Cancel" name="Cancel" class="btn btn-danger">Cancel</button>
                  </div>
                </div>

                </fieldset>
            </form>

            
        </div>
        <!--end of project member-->
    
    </div>
    
</div>
  
<!-- End Page Content -->
@stop