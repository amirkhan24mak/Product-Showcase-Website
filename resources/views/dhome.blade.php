@extends("weblayout.adminlayout")
@section("dlayout")

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

     

      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                <div>
                  <p class="mb-2 text-md-center text-lg-left">Total Mail</p>
                  <h1 class="mb-0">8742</h1>
                </div>
                <i class="typcn typcn-briefcase icon-xl text-secondary"></i>
              </div>
              <canvas id="expense-chart" height="80"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                <div>
                  <p class="mb-2 text-md-center text-lg-left">Total Products</p>
                  <h1 class="mb-0">47,840</h1>
                </div>
                <i class="typcn typcn-chart-pie icon-xl text-secondary"></i>
              </div>
              <canvas id="budget-chart" height="80"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                <div>
                  <p class="mb-2 text-md-center text-lg-left">Total Product Soldout</p>
                  <h1 class="mb-0">$7,243</h1>
                </div>
                <i class="typcn typcn-clipboard icon-xl text-secondary"></i>
              </div>
              <canvas id="balance-chart" height="80"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="table-responsive pt-3">
              <table class="table table-striped project-orders-table">
                <thead>
                  <tr>
                    <th class="ml-5">ID</th>
                    <th>Project Image</th>
                    <th>Project Name</th>
                    <th>Available</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#D1</td>
                    <td>Consectetur adipisicing elit </td>
                    <td>Beulah Cummings</td>
                    <td>03 Jan 2019</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                          Edit
                          <i class="typcn typcn-edit btn-icon-append"></i>                          
                        </button>
                        <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                          Delete
                          <i class="typcn typcn-delete-outline btn-icon-append"></i>                          
                        </button>
                      </div>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    
@endsection