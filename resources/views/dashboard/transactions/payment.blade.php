@extends('dashboard.layout.app')
@section('content')

<div class="settings mtb15">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-12 col-lg-8 offset-lg-2">
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade active show" id="settings-wallet" role="tabpanel" aria-labelledby="settings-wallet-tab">
              <div class="wallet">
                <div class="row">
                  <div class="col-md-12 col-lg-4">
                    <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinBTC" role="tab" aria-selected="false">
                        <div class="d-flex">
                          <img src="assets/img/icon/18.png" alt="btc">
                          <div>
                            <h2>BTC</h2>
                            <p>Bitcoin</p>
                          </div>
                        </div>
                        <div>
                          <h3>4.5484254</h3>
                          <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                        </div>
                      </a>
                      <a class="nav-link d-flex justify-content-between align-items-center" data-toggle="pill" href="#coinETH" role="tab" aria-selected="true">
                        <div class="d-flex">
                          <img src="assets/img/icon/1.png" alt="btc">
                          <div>
                            <h2>ETH</h2>
                            <p>Ethereum</p>
                          </div>
                        </div>
                        <div>
                          <h3>13.454845</h3>
                          <p class="text-right"><i class="icon ion-md-lock"></i> 0.0000000</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-12 col-lg-12">
                    <div class="tab-content">
                      <div class="tab-pane fade" id="coinBTC" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>5.5894 BTC</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>2.480 BTC</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinETH" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>4.1542 ETH</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>1.334 ETH</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade active show" id="coinBNB" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>7.342 BNB</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>0.332 BNB</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinTRX" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>4.3344 TRX</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>1.453 TRX</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinEOS" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>33.35 EOS</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>4.445 EOS</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinXMR" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>34.333 XMR</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>2.354 XMR</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="coinKCS" role="tabpanel">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Balances</h5>
                            <ul>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-cash"></i>
                                  <h2>Total Equity</h2>
                                </div>
                                <div>
                                  <h3>86.577 KCS</h3>
                                </div>
                              </li>
                              <li class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="icon ion-md-checkmark"></i>
                                  <h2>Available Margin</h2>
                                </div>
                                <div>
                                  <h3>5.78 KCS</h3>
                                </div>
                              </li>
                            </ul>
                            <button class="btn green">Deposit</button>
                            <button class="btn red">Withdraw</button>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Wallet Deposit Address</h5>
                            <div class="row wallet-address">
                              <div class="col-md-8">
                                <p>Deposits to this address are unlimited. Note that you may not be able to withdraw all
                                  of your
                                  funds at once if you deposit more than your daily withdrawal limit.</p>
                                <div class="input-group">
                                  <input type="text" class="form-control" value="Ad87deD4gEe8dG57Ede4eEg5dREs4d5e8f4e">
                                  <div class="input-group-prepend">
                                    <button class="btn btn-primary">COPY</button>
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img src="assets/img/qr-code-dark.svg" alt="qr-code">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Latest Transactions</h5>
                            <div class="wallet-history">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>No.</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>25-04-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>4.5454334</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>25-05-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>0.5484468</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-06-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td>25-07-2019</td>
                                    <td><i class="icon ion-md-checkmark-circle-outline green"></i></td>
                                    <td>1.45894147</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>25-08-2019</td>
                                    <td><i class="icon ion-md-close-circle-outline red"></i></td>
                                    <td>2.5454545</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
