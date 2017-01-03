@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('') }}">Director and Company Secretary's Module</a>
            </div>
            <!-- /.navbar-header -->


            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li {{ (Request::is('*trial_balance') ? 'class="active"' : '') }}>
                            <a href="{{ url ('trial_balance') }}"><i class="fa fa-money fa-fw"></i> Trial Balance</a>

                        </li>
                        <li {{ (Request::is('*reports') ? 'class="active"' : '') }}>
                            <a href="{{ url ('reports') }}"><i class="fa fa-edit fa-fw"></i> Reports</a>
                        </li>
                        <li {{ (Request::is('*accounts') ? 'class="active"' : '') }}>
                            <a href="{{ url ('accounts') }}"><i class="fa fa-table fa-fw"></i> Accounts</a>
                        </li>
                        <li {{ (Request::is('*messages') ? 'class="active"' : '') }}>
                            <a href="{{ url ('messages') }}"><i class="fa fa-envelope-o fa-fw"></i> Messages</a>
                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

