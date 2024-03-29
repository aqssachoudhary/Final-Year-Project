@extends('layouts.app') @section('content') <div class="page-wrapper">
  <div class="content container-fluid pb-0">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Department</h5>
        </div>
        <div class="modal-body card p-4">
          <form method="post" action="{{url('attendance')}}"> @csrf <div class="row">
              <div class="col-sm-4">
                <div class="input-block mb-3">
                  <label class="col-form-label">Teacher ID <span class="text-danger">*</span>
                  </label>
                  <select class="select" name="teacher">
                    <option>Select ID</option> @foreach($teachers as $teacher) <option>{{$teacher->id}}</option> @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="input-block mb-3">
                  <label class="col-form-label">Student ID <span class="text-danger">*</span>
                  </label>
                  <select class="select" name="student">
                    <option>Select ID</option> @foreach($students as $student) <option>{{$student->id}}</option> @endforeach
                  </select>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="input-block mb-3">
                  <label class="col-form-label">Punch IN <span class="text-danger">*</span>
                  </label>
                  <input class="form-control" type="text" name="in">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="input-block mb-3">
                  <label class="col-form-label">Punch OUT <span class="text-danger">*</span>
                  </label>
                  <input class="form-control" type="text" name="out">
                </div>
              </div>
              <div class="col-sm-4">
                <div class="input-block mb-3">
                  <label class="col-form-label">Date <span class="text-danger">*</span>
                  </label>
                  <input class="form-control" type="text" name="date">
                </div>
              </div>
              <div class="col-sm-4">
                <label>Status</label>
                <br>
                <label class="radio-inline">
                  <input type="radio" name="status" value="1" checked="checked">Active </label>
                <label class="radio-inline">
                  <input type="radio" name="status" value="0">Inctive </label>
              </div>
              <div class="submit-section">
                <button class="btn btn-success submit-btn" name="submit">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div id="edit_employee" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Employee</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="row">
              <div class="col-sm-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Student Name <span class="text-danger">*</span>
                  </label>
                  <input class="form-control" value="John" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Depatment Name</label>
                  <input class="form-control" value="Doe" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Student ID <span class="text-danger">*</span>
                  </label>
                  <input class="form-control" value="johndoe" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Email <span class="text-danger">*</span>
                  </label>
                  <input class="form-control" value="johndoe@example.com" type="email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Password</label>
                  <input class="form-control" value="johndoe" type="password">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Company</label>
                  <select class="select">
                    <option>Global Technologies</option>
                    <option>Delta Infotech</option>
                    <option selected>International Software Inc</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Department <span class="text-danger">*</span>
                  </label>
                  <select class="select">
                    <option>Marketing</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-block mb-3">
                  <label class="col-form-label">Designation <span class="text-danger">*</span>
                  </label>
                  <select class="select">
                    <option>Select Designation</option>
                    <option>Web Designer</option>
                    <option>Web Developer</option>
                    <option>Android Developer</option>
                  </select>
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
                    <td>Holidays</td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" checked>
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Leaves</td>
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Clients</td>
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Chats</td>
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>Assets</td>
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
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
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
                      </label>
                    </td>
                    <td class="text-center">
                      <label class="custom_check">
                        <input type="checkbox" name="rememberme" class="rememberme">
                        <span class="checkmark"></span>
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
  <div class="modal custom-modal fade" id="delete_employee" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="form-header">
            <h3>Delete Employee</h3>
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
              <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
              <label class="form-check-label  avatar-md w-100" for="customizer-layout03">
                <img src="assets/img/two-col.png" alt="Layout Image">
              </label>
            </div>
            <h5 class="fs-13 text-center mt-2">Two Column</h5>
          </div>
        </div>
        <div class="layout-head pt-3">
          <h5>Color Scheme</h5>
          <h6>Choose Light or Dark Scheme.</h6>
        </div>
        <div class="colorscheme-cardradio">
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-orange" value="orange">
                <label class="form-check-label  avatar-md w-100 " for="layout-mode-orange">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Orange</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
                <label class="form-check-label  avatar-md w-100" for="layout-mode-light">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Light</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio dark  p-0 ">
                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
                <label class="form-check-label avatar-md w-100 " for="layout-mode-dark">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Dark</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio blue  p-0 ">
                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-blue" value="blue">
                <label class="form-check-label  avatar-md w-100" for="layout-mode-blue">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Blue</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio maroon p-0">
                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-maroon" value="maroon">
                <label class="form-check-label  avatar-md w-100 " for="layout-mode-maroon">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Maroon</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio purple p-0">
                <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-purple" value="purple">
                <label class="form-check-label  avatar-md w-100 " for="layout-mode-purple">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Purple</h5>
            </div>
          </div>
        </div>
        <div id="layout-width">
          <div class="layout-head pt-3">
            <h5>Layout Width</h5>
            <h6>Choose Fluid or Boxed layout.</h6>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-check card-radio p-0">
                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                <label class="form-check-label avatar-md w-100" for="layout-width-fluid">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Fluid</h5>
            </div>
            <div class="col-4">
              <div class="form-check card-radio p-0 ">
                <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                <label class="form-check-label avatar-md w-100 px-2" for="layout-width-boxed">
                  <img src="assets/img/boxed.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Boxed</h5>
            </div>
          </div>
        </div>
        <div id="layout-position">
          <div class="layout-head pt-3">
            <h5>Layout Position</h5>
            <h6>Choose Fixed or Scrollable Layout Position.</h6>
          </div>
          <div class="btn-group bor-rad-50 overflow-hidden radio" role="group">
            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>
            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
          </div>
        </div>
        <div class="layout-head pt-3">
          <h5>Topbar Color</h5>
          <h6>Choose Light or Dark Topbar Color.</h6>
        </div>
        <div class="row">
          <div class="col-4">
            <div class="form-check card-radio  p-0">
              <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
              <label class="form-check-label avatar-md w-100" for="topbar-color-light">
                <img src="assets/img/vertical.png" alt="Layout Image">
              </label>
            </div>
            <h5 class="fs-13 text-center mt-2">Light</h5>
          </div>
          <div class="col-4">
            <div class="form-check card-radio p-0">
              <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
              <label class="form-check-label  avatar-md w-100" for="topbar-color-dark">
                <img src="assets/img/dark.png" alt="Layout Image">
              </label>
            </div>
            <h5 class="fs-13 text-center mt-2">Dark</h5>
          </div>
        </div>
        <div id="sidebar-size">
          <div class="layout-head pt-3">
            <h5>Sidebar Size</h5>
            <h6>Choose a size of Sidebar.</h6>
          </div>
          <div class="row">
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio  p-0 ">
                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                <label class="form-check-label avatar-md w-100" for="sidebar-size-default">
                  <img src="assets/img/vertical.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Default</h5>
            </div>
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio p-0">
                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                <label class="form-check-label  avatar-md w-100" for="sidebar-size-compact">
                  <img src="assets/img/compact.png" alt="Layout Image">
                </label>
              </div>
              <h5 class="fs-13 text-center mt-2">Compact</h5>
            </div>
            <div class="col-4">
              <div class="form-check sidebar-setting card-radio p-0 ">
                <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">undefined<label class="form-check-label avatar-md w-100" for="sidebar-size-small-hover">undefinedundefined<img src="assets/img/small-hover.png" alt="Layout Image">undefinedundefined</label>undefined
              </div>undefined<h5 class="fs-13 text-center mt-2">Small Hover View</h5>
            </div>
          </div>
        </div>
        <div id="sidebar-view">
          <div class="layout-head pt-3">
            <h5>Sidebar View</h5>
            <h6>Choose Default or Detached Sidebar view.</h6>
          </div>
          <div class="row">
            <div class="col-4">undefined<div class="form-check sidebar-setting card-radio  p-0">undefinedundefined<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">undefinedundefined<label class="form-check-label avatar-md w-100" for="sidebar-view-default">undefinedundefinedundefined<img src="assets/img/compact.png" alt="Layout Image">undefinedundefinedundefined</label>undefinedundefined</div>undefinedundefined<h5 class="fs-13 text-center mt-2">Default</h5>undefined undefined</div>undefinedundefined<div class="col-4">undefinedundefined<div class="form-check sidebar-setting card-radio p-0">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">undefinedundefinedundefined<label class="form-check-label  avatar-md w-100" for="sidebar-view-detached">undefinedundefinedundefined<img src="assets/img/detached.png" alt="Layout Image">undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<h5 class="fs-13 text-center mt-2">Detached</h5>undefined undefinedundefined</div>undefined undefined
          </div>undefined undefined
        </div>undefinedundefined<div id="sidebar-color">undefinedundefined<div class="layout-head pt-3">undefinedundefinedundefined<h5>Sidebar Color</h5>undefinedundefinedundefined<h6>Choose a color of Sidebar.</h6>undefinedundefined</div>undefinedundefined<div class="row">undefinedundefinedundefined<div class="col-4">undefinedundefinedundefined<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">undefinedundefinedundefined<label class="form-check-label  avatar-md w-100" for="sidebar-color-light">undefinedundefinedundefined<span class="bg-light bg-sidebarcolor"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<h5 class="fs-13 text-center mt-2">Light</h5>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="col-4">undefinedundefinedundefined<div class="form-check sidebar-setting card-radio p-0" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">undefinedundefinedundefined<label class="form-check-label  avatar-md w-100" for="sidebar-color-dark">undefinedundefinedundefined<span class="bg-darks bg-sidebarcolor"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<h5 class="fs-13 text-center mt-2">Dark</h5>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="col-4">undefinedundefinedundefined<div class="form-check sidebar-setting card-radio p-0">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">undefinedundefinedundefined<label class="form-check-label avatar-md w-100" for="sidebar-color-gradient">undefinedundefinedundefined<span class="bg-gradients bg-sidebarcolor"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<h5 class="fs-13 text-center mt-2">Gradient</h5>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="col-4 d-none">undefinedundefinedundefined<button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">undefinedundefinedundefined<span class="d-flex gap-1 h-100">undefinedundefinedundefined<span class="flex-shrink-0">undefinedundefinedundefined<span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">undefinedundefinedundefined<span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>undefinedundefinedundefined<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>undefinedundefinedundefined<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>undefinedundefinedundefined<span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>undefinedundefinedundefined</span>undefinedundefinedundefined</span>undefinedundefinedundefined<span class="flex-grow-1">undefinedundefinedundefined<span class="d-flex h-100 flex-column">undefinedundefinedundefined<span class="bg-light d-block p-1"></span>undefinedundefinedundefined<span class="bg-light d-block p-1 mt-auto"></span>undefinedundefinedundefined</span>undefinedundefinedundefined</span>undefinedundefinedundefined</span>undefinedundefinedundefined</button>undefinedundefinedundefined<h5 class="fs-13 text-center mt-2">Gradient</h5>undefinedundefinedundefined</div>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="collapse d-none" id="collapseBgGradient">undefinedundefinedundefined<div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">undefinedundefinedundefined<div class="form-check sidebar-setting card-radio">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-1" value="gradient">undefinedundefinedundefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">undefinedundefinedundefined<span class="avatar-title rounded-circle bg-vertical-gradient"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="form-check sidebar-setting card-radio">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">undefinedundefinedundefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">undefinedundefinedundefined<span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="form-check sidebar-setting card-radio">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">undefinedundefinedundefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">undefinedundefinedundefined<span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="form-check sidebar-setting card-radio">undefinedundefinedundefined<input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">undefinedundefinedundefined<label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">undefinedundefinedundefined<span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>undefinedundefinedundefined</label>undefinedundefinedundefined</div>undefinedundefinedundefined</div>undefinedundefinedundefined</div>undefined undefinedundefined</div>undefined undefined undefined
      </div>undefined undefined undefined
    </div>undefined undefined undefined
  </div>undefinedundefinedundefined<div class="offcanvas-footer border-top p-3 text-center">undefinedundefinedundefined<div class="row">undefinedundefinedundefined<div class="col-6">undefinedundefinedundefined<button type="button" class="btn btn-light w-100 bor-rad-50" id="reset-layout">Reset</button>undefinedundefinedundefined</div>undefinedundefinedundefined<div class="col-6">undefinedundefinedundefined<a href="https://themeforest.net/item/smarthr-bootstrap-admin-panel-template/21153150" target="_blank" class="btn btn-primary w-100 bor-rad-50">Buy Now</a>undefinedundefinedundefined</div>undefinedundefinedundefined</div>undefinedundefinedundefined</div>undefined undefined undefined
</div> @endsection