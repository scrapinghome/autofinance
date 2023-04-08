<?php
/**
 * created by: tushar Khan
 * email : tushar.khan0122@gmail.com
 * date : 4/5/2023
 */
?>

<section class="bitcoin-calculator-section">
    <div class="container">
        <div class="row">
            <!-- Section Heading Starts -->
            <div class="col-md-12">
                <h2 class="title-head text-center"><span>Profit</span> Calculator</h2>
                <p class="message text-center">Caluclate your profit by selecting your desired startegy below.</p>
            </div>
            <!-- Section Heading Ends -->
            <!-- Bitcoin Calculator Form Starts -->
            <div class="col-md-12 ">
                <form class="bitcoin-calculator" id="bitcoin-calculator">
                    <input class="form-input form-input-result" id="capitol_input" name="capitol_input">
                    <!-- Input/Result Ends -->
                    <!-- Select Currency Starts -->
                    <div class="form-wrap">
                        <select class="form-input select-currency select-primary" id="capitol_select"
                                name="capitol_select" data-dropdown-class="select-primary-dropdown">
                            <option value="" disabled selected>Capital</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                            <option value="5000">5000</option>
                        </select>
                    </div>

                    <!-- Input/Result Starts -->
                    <input class="form-input form-input-result" id="month_input" name="month_input"
                           style="margin-left: 25px">
                    <!-- Input/Result Ends -->
                    <!-- Select Currency Starts -->
                    <div class="form-wrap">
                        <select class="form-input select-currency select-primary" id="month_select"
                                name="month_select" data-dropdown-class="select-primary-dropdown">
                            <option value="" disabled selected>Months</option>
                            <option value="3">3</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                            <option value="18">18</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                        </select>
                    </div>
                    <!-- Select Currency Ends -->

                    <!-- Select Currency Starts -->
                    <div class="form-wrap form-group" style="margin-left: 25px">
                        <select class="form-control select-currency select-primary" id="strategy_select"
                                name="strategy_select">
                            <option value="" disabled selected>Select Strategy</option>
                            @foreach($strategies as $strategy)
                                <option value="{{$strategy->id}}">{{$strategy->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <input class="form-input form-input-result" name="result" id="result" style="margin-left: 25px">

                </form>
            </div>
            <!-- Bitcoin Calculator Form Ends -->
        </div>
    </div>
</section>
