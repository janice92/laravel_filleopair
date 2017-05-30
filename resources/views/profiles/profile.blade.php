@extends('layouts.app')

@section('content')
      <div class="container">
            <div class="col-lg-4">
                  <div class="panel panel-default">
                        <div class="panel-heading">
                                <img src="{{URL::asset('../')}}/img/{{Auth::user()->pic}}" width="120px" height="120px" class="img-circle"/>
                            
                             
                        </div>
                        
                        <div class="panel-body">
                               <p class="text-center">
                                     <p class="text-center">
                                    {{ Auth::user()->name }}'s profile </p>
                                    
                                     <p class="text-center">
                                    {{ Auth::user()->profile->city }}</p>
                                    
                                     <p class="text-center">
                                    {{ Auth::user()->profile->country }}</p>
                                     <p class="text-center">
                                    {{ Auth::user()->profile->about }}</p>
                                    
                            
                              
                              </p>
                              
                            
                             
                              <p class="text-center">
                                    @if(Auth::user()->id)
                                          <a href="{{ route('profile.edit') }}" class="btn btn-info">Edit your profile</a>
                                    @endif
                              </p>
                              
                        </div>
                  </div>
            </div>
      </div>
@stop