@extends('layouts.master')
@section('title')
<title>My Profile</title>
@stop
@section('content')

<div class="container" id="profile">
      <div class="row">
        <div class=" col-md-12 col-lg-12 "> 
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$user->first_name}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="{{{ Auth::user()->profile_img_url ? '/img/' . Auth::user()->profile_img_url : '/images/avatar.png' }}}" class="img-circle img-responsive"> 
                </div>
                    <div class=" col-md-12 col-lg-12 "> 
                      <table class="table table-user-information">
                        <tbody>
                          <tr>
                            <td>Member Since:</td>
                            <td>{{Auth::user()->created_at}}</td>
                          </tr>
                          <tr>
                            <td>Home Address</td>
                            <td>{{Auth::user()->address}}</td>
                          </tr>
                          <tr>
                            <td>Email</td>
                            <td><a href="mailto:{{Auth::user()->email}}">{{Auth::user()->email}}</a></td>
                          </tr>
                          <tr>
                            <td>Phone Number</td>
                            <td>{{Auth::user()->phone_number}}</td>
                          </tr>   
                        </tbody>
                      </table>
                    </div>
              </div>
            </div>
                <div class="panel-footer">
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">MY RESUMES</button>
                    <a href="/templates/create"><button type="button" class="btn btn-info btn-lg" >NEW RESUME</button></a>
                    <span class="pull-right">
                        <a href="{{{action ('UsersController@edit', Auth::user()->id)}}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-lg btn-warning">Edit Profile <i class="glyphicon glyphicon-edit"></i></a>
                    </span>
                </div>
          </div>
        </div>
      </div>
    </div>

    @include('users.partials.my_resumes_modal')
@stop