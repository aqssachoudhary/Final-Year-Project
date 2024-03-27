@extends('layouts.app') @section('content')

 <div class="page-wrapper">
  <div class="content container-fluid pb-0">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
<div class="modal-content">
        <div class="modal-header">
<h5 class="modal-title">Add Students</h5></div>
    <div class="modal-content">
      <div class="modal-body card p-4">
        <form method="post" action="{{url('student')}}"> @csrf <div class="row">
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">First Name <span class="text-danger">*</span>
                </label>
                <input class="form-control" type="text" name="fname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Last Name</label>
                <input class="form-control" type="text" name="lanme">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Username <span class="text-danger">*</span>
                </label>
                <input class="form-control" type="text" name="username">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Email <span class="text-danger">*</span>
                </label>
                <input class="form-control floating" type="email" name="email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Password</label>
                <input class="form-control" type="password" name="password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Confirm Password</label>
                <input class="form-control" type="password" name="cnfrm_password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Student ID <span class="text-danger">*</span>
                </label>
                <input class="form-control floating" type="text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Phone </label>
                <input class="form-control" type="text" name="mobile">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Department Name</label>
                <input class="form-control" type="text" name="department">
              </div>
            </div>
          </div>
          
                 
          <div class="submit-section">
            <button class="btn btn-primary submit-btn" name="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="edit_client" class="modal custom-modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post"> @csrf <div class="row">
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">First Name <span class="text-danger">*</span>
                </label>
                <input class="form-control" value="Barry" type="text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Last Name</label>
                <input class="form-control" value="Cuda" type="text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Username <span class="text-danger">*</span>
                </label>
                <input class="form-control" value="barrycuda" type="text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Email <span class="text-danger">*</span>
                </label>
                <input class="form-control floating" value="barrycuda@example.com" type="email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Password</label>
                <input class="form-control" value="barrycuda" type="password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Confirm Password</label>
                <input class="form-control" value="barrycuda" type="password">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Client ID <span class="text-danger">*</span>
                </label>
                <input class="form-control floating" value="CLT-0001" type="text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Phone </label>
                <input class="form-control" value="9876543210" type="text">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-block mb-3">
                <label class="col-form-label">Company Name</label>
                <input class="form-control" type="text" value="Global Technologies">
              </div>
            </div>
          </div>
          <div class="table-responsive m-t-15">
            <table class="table table-striped custom-table">
              <thead>
                <tr>
                  <th>Module Permission</th>
                  <th class="text-center">Read</th>
                  <th class="text-center">Write</th>
                  <th class="text-center">Create</th>
                  <th class="text-center">Delete</th>
                  <th class="text-center">Import</th>
                  <th class="text-center">Export</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Projects</td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Tasks</td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Chat</td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Estimates</td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Invoices</td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                </tr>
                <tr>
                  <td>Timing Sheets</td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </td>
                  <td class="text-center">
                    <label class="custom_check">
                      <input type="checkbox" checked>undefined<span class="checkmark"></span>
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="submit-section">
            <button class="btn btn-primary submit-btn">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal custom-modal fade" id="delete_client" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <div class="form-header">
          <h3>Delete Client</h3>
          <p>Are you sure want to delete?</p>
        </div>
        <div class="modal-btn delete-action">
          <div class="row">
            <div class="col-6">
              <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
            </div>
            <div class="col-6">
              <a href="javascript:void(0);" data-bs-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div class="settings-icon">
  <span data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
    <i class="las la-cog"></i>
  </span>
</div>
<div class="offcanvas offcanvas-end border-0 " tabindex="-1" id="theme-settings-offcanvas">
  <div class="sidebar-headerset">
    <div class="sidebar-headersets">
      <h2>Customizer</h2>
      <h3>Customize your overview Page layout</h3>
    </div>
    <div class="sidebar-headerclose">
      <a data-bs-dismiss="offcanvas" aria-label="Close">
        <img src="assets/img/close.png" alt="Close Icon">
      </a>
    </div>
  </div>
  <div class="offcanvas-body p-0">
    <div data-simplebar class="h-100">
      <div class="settings-mains">
        <div class="layout-head">
          <h5>Layout</h5>
          <h6>Choose your layout</h6>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-check card-radio p-0">
              <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
              <label class="form-check-label avatar-md w-100" for="customizer-layout01">
                <img src="assets/img/vertical.png" alt="Layout Image">
              </label>
            </div>
            <h5 class="fs-13 text-center mt-2">Vertical</h5>
          </div>
          <div class="col-4">
            <div class="form-check card-radio p-0">
              <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
              <label class="form-check-label  avatar-md w-100" for="customizer-layout02">
                <img src="assets/img/horizontal.png" alt="Layout Image">
              </label>
            </div>
            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
          </div>
          <div class="col-4">
            <div class="form-check card-radio p-0">
              <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">undefined<label class="form-check-label  avatar-md w-100" for="customizer-layout03">undefined<img src="assets/img/two-col.png" alt="Layout Image">undefined</label>undefined
            </div>undefined<h5 class="fs-13 text-center mt-2">Two Column</h5>
          </div>
        </div>
        <div class="layout-head pt-3">
          <h5>Color Scheme</h5>
          <h6>Choose Light or Dark Scheme.</h6>
        </div>
        <div class="colorscheme-cardradio">
          <div class="row">undefined<div class="col-4">undefined<div class="form-check card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange">undefined<label class="form-check-label  avatar-md w-100 " for="layout-mode-orange">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Orange</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">undefined<label class="form-check-label  avatar-md w-100" for="layout-mode-light">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Light</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio dark  p-0 ">undefined<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">undefined<label class="form-check-label avatar-md w-100 " for="layout-mode-dark">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Dark</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio blue  p-0 ">undefined<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue">undefined<label class="form-check-label  avatar-md w-100" for="layout-mode-blue">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Blue</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio maroon p-0">undefined<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon">undefined<label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Maroon</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio purple p-0">undefined<input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple">undefined<label class="form-check-label  avatar-md w-100 " for="layout-mode-purple">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Purple</h5>undefined</div>undefined</div>undefined
        </div>undefined<div id="layout-width">undefined<div class="layout-head pt-3">undefined<h5>Layout Width</h5>undefined<h6>Choose Fluid or Boxed layout.</h6>undefined</div>undefined<div class="row">undefined<div class="col-4">undefined<div class="form-check card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">undefined<label class="form-check-label avatar-md w-100" for="layout-width-fluid">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Fluid</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio p-0 ">undefined<input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">undefined<label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed">undefined<img src="assets/img/boxed.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Boxed</h5>undefined</div>undefined</div>undefined</div>undefined<div id="layout-position">undefined<div class="layout-head pt-3">undefined<h5>Layout Position</h5>undefined<h6>Choose Fixed or Scrollable Layout Position.</h6>undefined</div>undefined<div class="btn-group bor-rad-50 overflow-hidden radio" role="group">undefined<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">undefined<label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>undefined<input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">undefined<label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>undefined</div>undefined</div>undefined<div class="layout-head pt-3">undefined<h5>Topbar Color</h5>undefined<h6>Choose Light or Dark Topbar Color.</h6>undefined</div>undefined<div class="row">undefined<div class="col-4">undefined<div class="form-check card-radio  p-0">undefined<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">undefined<label class="form-check-label avatar-md w-100" for="topbar-color-light">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Light</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">undefined<label class="form-check-label  avatar-md w-100" for="topbar-color-dark">undefined<img src="assets/img/dark.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Dark</h5>undefined</div>undefined</div>undefined<div id="sidebar-size">undefined<div class="layout-head pt-3">undefined<h5>Sidebar Size</h5>undefined<h6>Choose a size of Sidebar.</h6>undefined</div>undefined<div class="row">undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio  p-0 ">undefined<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">undefined<label class="form-check-label avatar-md w-100" for="sidebar-size-default">undefined<img src="assets/img/vertical.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Default</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">undefined<label class="form-check-label  avatar-md w-100" for="sidebar-size-compact">undefined<img src="assets/img/compact.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Compact</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio p-0 ">undefined<input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">undefined<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover">undefined<img src="assets/img/small-hover.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Small Hover View</h5>undefined</div>undefined</div>undefined</div>undefined<div id="sidebar-view">undefined<div class="layout-head pt-3">undefined<h5>Sidebar View</h5>undefined<h6>Choose Default or Detached Sidebar view.</h6>undefined</div>undefined<div class="row">undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio  p-0">undefined<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">undefined<label class="form-check-label avatar-md w-100" for="sidebar-view-default">undefined<img src="assets/img/compact.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Default</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">undefined<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached">undefined<img src="assets/img/detached.png" alt="Layout Image">undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Detached</h5>undefined</div>undefined</div>undefined</div>undefined<div id="sidebar-color">undefined<div class="layout-head pt-3">undefined<h5>Sidebar Color</h5>undefined<h6>Choose a color of Sidebar.</h6>undefined</div>undefined<div class="row">undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">undefined<label class="form-check-label  avatar-md w-100" for="sidebar-color-light">undefined<span class="bg-light bg-sidebarcolor"></span>undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Light</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">undefined<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark">undefined<span class="bg-darks bg-sidebarcolor"></span>undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Dark</h5>undefined</div>undefined<div class="col-4">undefined<div class="form-check sidebar-setting card-radio p-0">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">undefined<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient">undefined<span class="bg-gradients bg-sidebarcolor"></span>undefined</label>undefined</div>undefined<h5 class="fs-13 text-center mt-2">Gradient</h5>undefined</div>undefined<div class="col-4 d-none">undefined<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">undefined<span class="d-flex gap-1 h-100">undefined<span class="flex-shrink-0">undefined<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">undefined<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>undefined<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>undefined<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>undefined<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>undefined</span>undefined</span>undefined<span class="flex-grow-1">undefined<span class="d-flex h-100 flex-column">undefined<span class="bg-light d-block p-1"></span>undefined<span class="bg-light d-block p-1 mt-auto"></span>undefined</span>undefined</span>undefined</span>undefined</button>undefined<h5 class="fs-13 text-center mt-2">Gradient</h5>undefined</div>undefined</div>undefined<div class="collapse d-none" id="collapseBgGradient">undefined<div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">undefined<div class="form-check sidebar-setting card-radio">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-1" value="gradient">undefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">undefined<span class="avatar-title rounded-circle bg-vertical-gradient"></span>undefined</label>undefined</div>undefined<div class="form-check sidebar-setting card-radio">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">undefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">undefined<span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>undefined</label>undefined</div>undefined<div class="form-check sidebar-setting card-radio">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">undefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">undefined<span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>undefined</label>undefined</div>undefined<div class="form-check sidebar-setting card-radio">undefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">undefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">undefined<span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>undefined</label>undefined</div>undefined</div>undefined</div>undefined</div>undefined
      </div>undefined
    </div>undefined
  </div>undefined<div class="offcanvas-footer border-top p-3 text-center">undefined<div class="row">undefined<div class="col-6">undefined<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button>undefined</div>undefined<div class="col-6">undefined<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a>undefined</div>undefined</div>undefined</div>undefined
</div> @endsection