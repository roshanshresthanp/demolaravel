@extends('layouts.app')

@section('content')

                <div class="site-section bg-light">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-7 mb-5">
              
                          
                            {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
                          {{-- <form action="#" class="p-5 bg-white"> --}}
                           
              
                            <div class="row form-group">
                              <div class="col-md-12">
                                {{Form::label('title','Title',['class'=>'text-black'])}}
                                {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                              </div>
                            </div>
              
                            {{-- <div class="row form-group">
                              
                              <div class="col-md-12">
                                {{Form::label('email','Email',['class'=>'text-black'])}}
                                {{Form::email('email','',['class'=>'form-control','placeholder'=>'Email'])}}
                              </div>
                            </div> --}}
              
                            <div class="row form-group">
                              
                              <div class="col-md-12">
                                {{Form::label('body','Description',['class'=>'text-black'])}}
                                {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
                              </div>
                            </div>
              
              
                            <div class="row form-group">
                              <div class="col-md-12">
                                {{-- <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white"> --}}
                                {{Form::submit('Submit',['class'=>'btn btn-success btn-lg'])}}
                              </div>
                            </div>
              
                            {!! Form::close() !!}
                          {{-- </form> --}}
                        </div>
                        <div class="col-md-5">
                          
                          <div class="p-4 mb-3 bg-white">
                            <p class="mb-0 font-weight-bold">Address</p>
                            <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
              
                            <p class="mb-0 font-weight-bold">Phone</p>
                            <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
              
                            <p class="mb-0 font-weight-bold">Email Address</p>
                            <p class="mb-0"><a href="#">youremail@domain.com</a></p>
              
                          </div>
                          
                          <div class="p-4 mb-3 bg-white">
                            <img src="images/hero_bg_1.jpg" alt="Image" class="img-fluid mb-4 rounded">
                            <h3 class="h5 text-black mb-3">More Info</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
                            <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
                          </div>
              
                        </div>
                      </div>
                    </div>
                  </div>
        

                
@endSection