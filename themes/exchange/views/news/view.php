<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>

                           
                              <!-- Each posts should be enclosed inside "entry" class" -->
                              <!-- Post one -->
                              <div class="entry">
                                 <h2><a href="#"><?php echo $newsdetail->title_en;?></a></h2>
                                 
                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="icon-calendar"></i> 26-2-2012 <i class="icon-user"></i> Admin <i class="icon-folder-open"></i> <a href="#">General</a> <span class="pull-right"><i class="icon-comment"></i> <a href="#">2 Comments</a></span>
                                 </div>
                                 
                                 <!-- Thumbnail -->
                                 <div class="bthumb">
                                    <a href="#"><img src="img/photos/1.jpg" alt="" class="img-responsive"></a>
                                 </div>
                                 
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vulputate eros nec odio egestas in dictum nisi vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse porttitor luctus imperdiet. <a href="#">Praesent ultricies</a> enim ac ipsum aliquet pellentesque. Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. Duis a risus sed dolor placerat semper quis in urna. Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis. Fusce imperdiet ornare dignissim. Donec aliquet convallis tortor, et placerat quam posuere posuere. Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>
                                 
                                 <p>Fusce imperdiet, risus eget viverra faucibus, diam mi vestibulum libero, ut vestibulum tellus magna nec enim. Nunc dapibus varius interdum. Phasellus at lorem ut lectus fermentum convallis. Sed diam nisi, pulvinar vitae molestie hendrerit, venenatis eget mauris. Integer porta erat ac eros porta ultrices. Proin porttitor eros a ante molestie gravida commodo dui adipiscing. <a href="#">Morbi dictum nibh gravida</a> mi pretium dapibus. Nullam in est urna. In vitae adipiscing enim. Curabitur rhoncus condimentum lorem, non convallis dolor faucibus eget. In ut nulla est. Sed a interdum mauris. Duis eget risus ac orci vulputate vestibulum sit amet id orci. Etiam ac ante at lorem ultrices elementum. Vestibulum quis elit odio, id hendrerit ipsum. Fusce consequat leo vitae velit interdum at laoreet justo ullamcorper.</p>
                              </div>
                              
                              <div class="well">
                                 <!-- Social media icons -->
                                 <div class="social pull-left">
                                    <h5>Sharing is Sexy: </h5>
                                    <a href="#"><i class="icon-facebook facebook"></i></a>
                                    <a href="#"><i class="icon-twitter twitter"></i></a>
                                    <a href="#"><i class="icon-linkedin linkedin"></i></a>
                                    <a href="#"><i class="icon-pinterest pinterest"></i></a>
                                    <a href="#"><i class="icon-google-plus google-plus"></i></a>
                                 </div>
                                 <!-- Tags -->
                                 <div class="tags pull-right">
                                    <h5>Tags: </h5>
                                    <a href="#">Bootstrap</a> <a href="#">Responsive</a> <a href="#">Google</a> 
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                              
                              <hr>
                              
                              <!-- Comment section -->
                  
                              <div class="comments well">
                                 
                                    <div class="title"><h4>2 Comments</h4></div>
                                    
                                    <ul class="comment-list">
                                      <li class="comment">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="http://placekitten.com/64/64">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                      <li class="comment reply">
                                        <a class="pull-left" href="#">
                                          <img class="avatar" src="http://placekitten.com/64/64">
                                        </a>
                                          <div class="comment-author"><a href="#">Ashok</a></div>
                                          <div class="cmeta">Commented on 25/12/2012</div>
                                          <p>Nulla facilisi. Sed justo dui, scelerisque ut consectetur vel, eleifend id erat. Phasellus condimentum rutrum aliquet. Quisque eu consectetur erat.</p>
                                          <div class="clearfix"></div>
                                      </li>
                                    </ul>
                              </div>
                              
                              <!-- Comment posting -->
                              
                              <div class="respond well">
                                 <div class="title"><h4>Post Reply</h4></div>
                                 
                                 <div class="form">
                                   <form class="form-horizontal">
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="name">Name</label>
                                         <div class="col-md-7">
                                           <input type="text" class="form-control" id="name">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="email">Email</label>
                                         <div class="col-md-7">
                                           <input type="text" class="form-control" id="email">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="website">Website</label>
                                         <div class="col-md-7">
                                           <input type="text" class="form-control" id="website">
                                         </div>
                                       </div>
                                       <div class="form-group">
                                         <label class="control-label col-md-2" for="comment">Comment</label>
                                         <div class="col-md-7">
                                           <textarea class="form-control" id="comment" rows="3"></textarea>
                                         </div>
                                       </div>
                                       <div class="form-group">
										<div class="col-md-9 col-md-offset-2">
                                         <button type="submit" class="btn btn-default">Submit</button>
                                         <button type="reset" class="btn btn-default">Reset</button>
										</div>
                                       </div>
                                   </form>
                                 </div>
                              </div>
                              
                              <!-- Navigation -->
                              
                              <div class="navigation button">  
                                    <div class="pull-left"><a href="#">« Previous Post</a></div>
                                    <div class="pull-right"><a href="#">Next Post »</a></div>
                                    <div class="clearfix"></div>
                              </div>
                              
                              <div class="clearfix"></div>