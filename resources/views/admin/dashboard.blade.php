@extends('masterPage')
@section('content')

<div class="col-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
          </div>
        </div>
        <span class="d-block mb-1">Payments</span>
        <h3 class="card-title text-nowrap mb-2">$2,456</h3>
        <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
      </div>
    </div>
</div>

<div class="col-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Transactions</span>
        <h3 class="card-title mb-2">$14,857</h3>
        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
      </div>
    </div>
</div>

<div class="col-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded"/>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Profit</span>
        <h3 class="card-title mb-2">$12,628</h3>
        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
      </div>
    </div>
</div>

<div class="col-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
          </div>
        </div>
        <span class="d-block mb-1">Payments</span>
        <h3 class="card-title text-nowrap mb-2">$2,456</h3>
        <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
      </div>
    </div>
</div>

<div class="col-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Transactions</span>
        <h3 class="card-title mb-2">$14,857</h3>
        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
      </div>
    </div>
</div>

<div class="col-4 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="card-title d-flex align-items-start justify-content-between">
          <div class="avatar flex-shrink-0">
            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success" class="rounded"/>
          </div>
        </div>
        <span class="fw-semibold d-block mb-1">Profit</span>
        <h3 class="card-title mb-2">$12,628</h3>
        <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
      </div>
    </div>
</div>

<div class="col-12 order-1 mb-4">
    <div class="card h-100">
      <div class="card-body px-0">
        <div class="tab-content p-0">
          <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
            <div class="d-flex p-4 pt-3">
              <div class="avatar flex-shrink-0 me-3">
                <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
              </div>
              <div>
                <small class="text-muted d-block">Total Balance</small>
                <div class="d-flex align-items-center">
                  <h6 class="mb-0 me-1">$459.10</h6>
                  <small class="text-success fw-semibold">
                    <i class="bx bx-chevron-up"></i>
                    42.9%
                  </small>
                </div>
              </div>
            </div>
            <div id="incomeChart"></div>
            <div class="d-flex justify-content-center pt-4 gap-2">
              <div class="flex-shrink-0">
                <div id="expensesOfWeek"></div>
              </div>
              <div>
                <p class="mb-n1 mt-1">Expenses This Week</p>
                <small class="text-muted">$39 less than last week</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection