@extends('includes.layout')

@section('content')

    <div class="main">

        <div class="non-shortable-content">
            <h1>Profile Page Template</h1>
            <h6>This design offers you an opportunity to use it as your profile page with convenience to customize it accordingly.</h6>
        </div>

        <div class="shortable-content">



            <div class="box _100">
                <div class="box-header">
                    Profile Name Here
                </div>

                <div class="box-content padd-10">

                    <div id="avtar">
                        <img src="../images/avatar.png" />
                    </div>

                    <div id="avtar_details">
                        <h3>Akshay Kumar <small>Admin</small></h3>
                        <ul class="info">
                            <li> <a href="javascript:void(0);"> <strong>42</strong> <small>Categories</small> </a> </li>
                            <li> <a href="javascript:void(0);"> <strong>5,216</strong> <small>Views</small> </a> </li>
                            <li> <a href="javascript:void(0);"> <strong>106</strong> <small>Orders</small> </a> </li>
                            <li> <a href="javascript:void(0);"> <strong>18</strong> <small>Ranking</small> </a> </li>
                        </ul>
                    </div>

                    <div class="clear_fix"></div>

                    <hr />

                    <h4>Profile Details</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>


                    <input type="submit" class="float_r red" value="Delete Account" /> &nbsp;


                    <br /><br />

                </div>
            </div><!--PROFILE PAGE ENDS HERE-->






        </div><!--SHORTABLECONTENT-ENDS-->

    </div><!--MAIN ENDS-->

@stop