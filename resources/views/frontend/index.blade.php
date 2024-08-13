@extends('frontend.websiteLatest')


@section('content')
<section class="user__profile__section__center">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="ct_stick_main">
          <div class="profile-rating">
            <div class="p-pic-2">
              <img src="{{ asset('theme_assets/images/Group PP.png') }}" alt="">
              <h4>Noah Olivia Fernandes</h4>
              <p>@nolivia</p>
            </div>
            <div class="numbering">
              <ul>
                <li>
                  <p>59</p>
                  <span>post</span>
                </li>
                <li>
                  <p>129</p>
                  <span>Friends</span>
                </li>
                <li>
                  <p>234</p>
                  <span>Media</span>
                </li>
                <li>
                  <p>8</p>
                  <span>Groups</span>
                </li>
              </ul>
            </div>
            <div class="media-btn">
              <div class="btn-1">
                <a href="#">Edit Profile</a>
              </div>
              <div class="btn-2">
                <a href="#">Send Message</a>
              </div>
            </div>
          </div>
          <div class="occassions-event">
            <h6>What's Happenning</h6>
            <div class="person-bio">
              <div class="celebrity">
                <p>Celebrity <span>Live</span>
                </p>
                <h5>Happy birhtday <span>Osaha</span>
                </h5>
                <p>Trending with <br>
                  <span>#happybirthdayosaha</span>
                </p>
              </div>
              <div class="celeb-profile">
                <img src="{{ asset('theme_assets/images/celeb-1.png') }}" alt="">
              </div>
            </div>
            <div class="see-more">
              <a href="#">See More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="edit-video">
          <img src="{{ asset('theme_assets/images/video-bg.png') }}" alt="">
          <div class="video-play">
            <img src="{{ asset('theme_assets/images/video-icn.svg') }}" alt="">
          </div>
          <div class="video-edit">
            <a href="#">Edit Profile</a>
          </div>
        </div>
        <div class="home-page-tabs">
          <ul class="tabs-custom-nav">
            <li>
              <a href="#tab1" class="current">News Feed</a>
            </li>
            <li>
              <a href="#tab2">Friends</a>
            </li>
            <li>
              <a href="#tab3">Market Place</a>
            </li>
          </ul>
          <div class="tabs-custom general">
            <div id="tab1" class="selected tab-content-panel">
              <div class="search-options">
                <div class="mb-3">
                  <input type="email" class="form-control" id="exampleFormControlInput8" placeholder="What in your mind.">
                  <div class="search-user">
                    <img src="{{ asset('theme_assets/images/search-icn-user.svg') }}" alt="">
                  </div>
                  <div class="search-plus">
                    <img src="{{ asset('theme_assets/images/user-plus.svg') }}" alt="">
                  </div>
                </div>
                <div class="">
                  <div class="narrow-arrow">
                    <h4>Follow People</h4>
                    <i class="fa-solid fa-arrow-right"></i>
                  </div>
                  <div class="row user-slider">
                    <div class="col-md-3">
                      <div class="b-radious">
                        <div class="follow-user-1">
                          <img src="{{ asset('theme_assets/images/user-follow-1.png') }}" alt="">
                        </div>
                        <div class="user-arrow">
                          <img src="{{ asset('theme_assets/images/user-arrow.svg') }}" alt="">
                        </div>
                        <div class="user-name">
                          <h4>Anisa Keena</h4>
                          <p>Designer</p>
                          <a href="#">Follow</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="b-radious">
                        <div class="follow-user-1">
                          <img src="{{ asset('theme_assets/images/user-follow-1.png') }}" alt="">
                        </div>
                        <div class="user-arrow">
                          <img src="{{ asset('theme_assets/images/user-arrow.svg') }}" alt="">
                        </div>
                        <div class="user-name">
                          <h4>Anisa Keena</h4>
                          <p>Designer</p>
                          <a href="#">Follow</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="b-radious">
                        <div class="follow-user-1">
                          <img src="{{ asset('theme_assets/images/user-follow-1.png') }}" alt="">
                        </div>
                        <div class="user-arrow">
                          <img src="{{ asset('theme_assets/images/user-arrow.svg') }}" alt="">
                        </div>
                        <div class="user-name">
                          <h4>Anisa Keena</h4>
                          <p>Designer</p>
                          <a href="#">Follow</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="b-radious">
                        <div class="follow-user-1">
                          <img src="{{ asset('theme_assets/images/user-follow-1.png') }}" alt="">
                        </div>
                        <div class="user-arrow">
                          <img src="{{ asset('theme_assets/images/user-arrow.svg') }}" alt="">
                        </div>
                        <div class="user-name">
                          <h4>Anisa Keena</h4>
                          <p>Designer</p>
                          <a href="#">Follow</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="b-radious">
                        <div class="follow-user-1">
                          <img src="{{ asset('theme_assets/images/user-follow-1.png') }}" alt="">
                        </div>
                        <div class="user-arrow">
                          <img src="{{ asset('theme_assets/images/user-arrow.svg') }}" alt="">
                        </div>
                        <div class="user-name">
                          <h4>Anisa Keena</h4>
                          <p>Designer</p>
                          <a href="#">Follow</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="tab2" class="tab-content-panel">
              <!-- <h3>(place nav and tabs anywhere separately) tab 2</h3> -->
            </div>
            <div id="tab3" class="tab-content-panel">
              <!-- <h3>(place nav and tabs anywhere separately) tab 3</h3> -->
            </div>
          </div>
        </div>
        <div class="main-desh-screen">
          <div class="desh-screen">
            <div class="user-img-profile">
              <div class="round-img">
                <img src="{{ asset('theme_assets/images/Ellipse-user.png') }}" alt="">
              </div>
              <div class="user-info-desh">
                <h5>Danny Quinn</h5>
                <p>5 hrs</p>
              </div>
            </div>
            <div class="desh-dots">
              <img src="{{ asset('theme_assets/images/desh-dots.svg') }}" alt="">
            </div>
          </div>
          <div class="user-bio">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi molestiae eaque maxime laudantium odit eos, laborum nihil, rerum temporibus quaerat unde, qui magni repudiandae deserunt. Exercitationem ab quaerat at!</p>
          </div>
          <div class="user-news-feed-sec">
            <img src="{{ asset('theme_assets/images/news-feed-1.png') }}" alt="">
            <div class="public-rating-flex">
              <div class="sub-flex">
                <div class="img-1-aling">
                  <img src="{{ asset('theme_assets/images/like-heart.svg') }}" alt="">
                </div>
                <div class="img-2-aling">
                  <img src="{{ asset('theme_assets/images/thumbnail.svg') }}" alt="">
                  <p>145 others</p>
                </div>
              </div>
              <div class="left-flex">
                <div class="tool-1">
                  <img src="{{ asset('theme_assets/images/black-message.svg') }}" alt="">
                  <p>55 messages</p>
                </div>
                <div class="tool-2">
                  <img src="{{ asset('theme_assets/images/site-tool.svg') }}" alt="">
                  <p>Shares</p>
                </div>
              </div>
            </div>
            <div class="like-comment">
              <div class="like">
                <img src="{{ asset('theme_assets/images/like-btn.svg') }}" alt="">
                <p>Like</p>
              </div>
              <div class="comment">
                <img src="{{ asset('theme_assets/images/red-message.svg') }}" alt="">
                <p>Comment</p>
              </div>
              <div class="share">
                <img src="{{ asset('theme_assets/images/red-chain.svg') }}" alt="">
                <p>Share</p>
              </div>
            </div>
          </div>
          <div class="search-share">
            <div class="search-p-user">
              <img src="{{ asset('theme_assets/images/profile-user.png') }}" alt="">
            </div>
            <div class="search-bar-nav">
              <div class="mb-3">
                <!-- <label for="exampleFormControlInput9" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="exampleFormControlInput9" placeholder="write a comment.....">
              </div>
            </div>
            <div class="paper-plan-share">
              <img src="{{ asset('theme_assets/images/paper-plan.svg') }}" alt="">
            </div>
          </div>
        </div>
        <!-- ############################## -->
        <div class="main-desh-screen">
          <div class="desh-screen">
            <div class="user-img-profile">
              <div class="round-img">
                <img src="{{ asset('theme_assets/images/Ellipse 14@2x.png') }}" alt="">
              </div>
              <div class="user-info-desh">
                <h5>Stanley Burton</h5>
                <p>5 hrs</p>
              </div>
            </div>
            <div class="desh-dots">
              <img src="{{ asset('theme_assets/images/desh-dots.svg') }}" alt="">
            </div>
          </div>
          <div class="user-bio">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi molestiae eaque maxime laudantium odit eos, laborum nihil, rerum temporibus quaerat unde, qui magni repudiandae deserunt. Exercitationem ab quaerat at!</p>
          </div>
          <div class="user-news-feed-sec">
            <img src="{{ asset('theme_assets/images/Rectangle 56@2x.png') }}" alt="">
            <div class="public-rating-flex">
              <div class="sub-flex">
                <div class="img-1-aling">
                  <img src="{{ asset('theme_assets/images/like-heart.svg') }}" alt="">
                </div>
                <div class="img-2-aling">
                  <img src="{{ asset('theme_assets/images/thumbnail.svg') }}" alt="">
                  <p>145 others</p>
                </div>
              </div>
              <div class="left-flex">
                <div class="tool-1">
                  <img src="{{ asset('theme_assets/images/black-message.svg') }}" alt="">
                  <p>55 messages</p>
                </div>
                <div class="tool-2">
                  <img src="{{ asset('theme_assets/images/site-tool.svg') }}" alt="">
                  <p>Shares</p>
                </div>
              </div>
            </div>
            <div class="like-comment">
              <div class="like">
                <img src="{{ asset('theme_assets/images/like-btn.svg') }}" alt="">
                <p>Like</p>
              </div>
              <div class="comment">
                <img src="{{ asset('theme_assets/images/red-message.svg') }}" alt="">
                <p>Comment</p>
              </div>
              <div class="share">
                <img src="{{ asset('theme_assets/images/red-chain.svg') }}" alt="">
                <p>Share</p>
              </div>
            </div>
          </div>
          <div class="search-share">
            <div class="search-p-user">
              <img src="{{ asset('theme_assets/images/profile-user.png') }}" alt="">
            </div>
            <div class="search-bar-nav">
              <div class="mb-3">
                <!-- <label for="exampleFormControlInput9" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="exampleFormControlInput9" placeholder="write a comment.....">
              </div>
            </div>
            <div class="paper-plan-share">
              <img src="{{ asset('theme_assets/images/paper-plan.svg') }}" alt="">
            </div>
          </div>
        </div>
        <!-- ########################################## -->
        <div class="main-desh-screen">
          <div class="desh-screen">
            <div class="user-img-profile">
              <div class="round-img">
                <img src="{{ asset('theme_assets/images/Profile Picture@2x.png') }}" alt="">
              </div>
              <div class="user-info-desh">
                <h5>Jason Gutierrez</h5>
                <p>5 hrs</p>
              </div>
            </div>
            <div class="desh-dots">
              <img src="{{ asset('theme_assets/images/desh-dots.svg') }}" alt="">
            </div>
          </div>
          <div class="user-bio">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi molestiae eaque maxime laudantium odit eos, laborum nihil, rerum temporibus quaerat unde, qui magni repudiandae deserunt. Exercitationem ab quaerat at!</p>
          </div>
          <div class="user-news-feed-sec">
            <img src="{{ asset('theme_assets/images/Rectangle 57@2x.png') }}" alt="">
            <div class="public-rating-flex">
              <div class="sub-flex">
                <div class="img-1-aling">
                  <img src="{{ asset('theme_assets/images/like-heart.svg') }}" alt="">
                </div>
                <div class="img-2-aling">
                  <img src="{{ asset('theme_assets/images/thumbnail.svg') }}" alt="">
                  <p>145 others</p>
                </div>
              </div>
              <div class="left-flex">
                <div class="tool-1">
                  <img src="{{ asset('theme_assets/images/black-message.svg') }}" alt="">
                  <p>55 messages</p>
                </div>
                <div class="tool-2">
                  <img src="{{ asset('theme_assets/images/site-tool.svg') }}" alt="">
                  <p>Shares</p>
                </div>
              </div>
            </div>
            <div class="like-comment">
              <div class="like">
                <img src="{{ asset('theme_assets/images/like-btn.svg') }}" alt="">
                <p>Like</p>
              </div>
              <div class="comment">
                <img src="{{ asset('theme_assets/images/red-message.svg') }}" alt="">
                <p>Comment</p>
              </div>
              <div class="share">
                <img src="{{ asset('theme_assets/images/red-chain.svg') }}" alt="">
                <p>Share</p>
              </div>
            </div>
          </div>
          <div class="search-share">
            <div class="search-p-user">
              <img src="{{ asset('theme_assets/images/profile-user.png') }}" alt="">
            </div>
            <div class="search-bar-nav">
              <div class="mb-3">
                <!-- <label for="exampleFormControlInput9" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="exampleFormControlInput9" placeholder="write a comment.....">
              </div>
            </div>
            <div class="paper-plan-share">
              <img src="{{ asset('theme_assets/images/paper-plan.svg') }}" alt="">
            </div>
          </div>
        </div>
        <!-- ########################################## -->
        <div class="main-desh-screen">
          <div class="desh-screen">
            <div class="user-img-profile">
              <div class="round-img">
                <img src="{{ asset('theme_assets/images/jesus-2.png') }}" alt="">
              </div>
              <div class="user-info-desh">
                <h5>Jesus Cooper</h5>
                <p>5 hrs</p>
              </div>
            </div>
            <div class="desh-dots">
              <img src="{{ asset('theme_assets/images/desh-dots.svg') }}" alt="">
            </div>
          </div>
          <div class="user-bio">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi molestiae eaque maxime laudantium odit eos, laborum nihil, rerum temporibus quaerat unde, qui magni repudiandae deserunt. Exercitationem ab quaerat at!</p>
          </div>
          <div class="user-news-feed-sec">
            <img src="{{ asset('theme_assets/images/soccar.png') }}" alt="">
            <div class="public-rating-flex">
              <div class="sub-flex">
                <div class="img-1-aling">
                  <img src="{{ asset('theme_assets/images/like-heart.svg') }}" alt="">
                </div>
                <div class="img-2-aling">
                  <img src="{{ asset('theme_assets/images/thumbnail.svg') }}" alt="">
                  <p>145 others</p>
                </div>
              </div>
              <div class="left-flex">
                <div class="tool-1">
                  <img src="{{ asset('theme_assets/images/black-message.svg') }}" alt="">
                  <p>55 messages</p>
                </div>
                <div class="tool-2">
                  <img src="{{ asset('theme_assets/images/site-tool.svg') }}" alt="">
                  <p>Shares</p>
                </div>
              </div>
            </div>
            <div class="like-comment">
              <div class="like">
                <img src="{{ asset('theme_assets/images/like-btn.svg') }}" alt="">
                <p>Like</p>
              </div>
              <div class="comment">
                <img src="{{ asset('theme_assets/images/red-message.svg') }}" alt="">
                <p>Comment</p>
              </div>
              <div class="share">
                <img src="{{ asset('theme_assets/images/red-chain.svg') }}" alt="">
                <p>Share</p>
              </div>
            </div>
          </div>
          <div class="search-share">
            <div class="search-p-user">
              <img src="{{ asset('theme_assets/images/profile-user.png') }}" alt="">
            </div>
            <div class="search-bar-nav">
              <div class="mb-3">
                <!-- <label for="exampleFormControlInput9" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="exampleFormControlInput9" placeholder="write a comment.....">
              </div>
            </div>
            <div class="paper-plan-share">
              <img src="{{ asset('theme_assets/images/paper-plan.svg') }}" alt="">
            </div>
          </div>
        </div>
        <!-- ######################################### -->
        <div class="main-desh-screen">
          <div class="desh-screen">
            <div class="user-img-profile">
              <div class="round-img">
                <img src="{{ asset('theme_assets/images/Ellipse 31.png') }}" alt="">
              </div>
              <div class="user-info-desh">
                <h5>Aneesa Keena</h5>
                <p>5 hrs</p>
              </div>
            </div>
            <div class="desh-dots">
              <img src="{{ asset('theme_assets/images/desh-dots.svg') }}" alt="">
            </div>
          </div>
          <div class="user-bio">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum eligendi molestiae eaque maxime laudantium odit eos, laborum nihil, rerum temporibus quaerat unde, qui magni repudiandae deserunt. Exercitationem ab quaerat at!</p>
          </div>
          <div class="user-news-feed-sec">
            <img src="{{ asset('theme_assets/images/trash-card.png') }}" alt="">
            <div class="public-rating-flex">
              <div class="sub-flex">
                <div class="img-1-aling">
                  <img src="{{ asset('theme_assets/images/like-heart.svg') }}" alt="">
                </div>
                <div class="img-2-aling">
                  <img src="{{ asset('theme_assets/images/thumbnail.svg') }}" alt="">
                  <p>145 others</p>
                </div>
              </div>
              <div class="left-flex">
                <div class="tool-1">
                  <img src="{{ asset('theme_assets/images/black-message.svg') }}" alt="">
                  <p>55 messages</p>
                </div>
                <div class="tool-2">
                  <img src="{{ asset('theme_assets/images/site-tool.svg') }}" alt="">
                  <p>Shares</p>
                </div>
              </div>
            </div>
            <div class="like-comment">
              <div class="like">
                <img src="{{ asset('theme_assets/images/like-btn.svg') }}" alt="">
                <p>Like</p>
              </div>
              <div class="comment">
                <img src="{{ asset('theme_assets/images/red-message.svg') }}" alt="">
                <p>Comment</p>
              </div>
              <div class="share">
                <img src="{{ asset('theme_assets/images/red-chain.svg') }}" alt="">
                <p>Share</p>
              </div>
            </div>
          </div>
          <div class="search-share">
            <div class="search-p-user">
              <img src="{{ asset('theme_assets/images/profile-user.png') }}" alt="">
            </div>
            <div class="search-bar-nav">
              <div class="mb-3">
                <!-- <label for="exampleFormControlInput9" class="form-label">Email address</label> -->
                <input type="email" class="form-control" id="exampleFormControlInput9" placeholder="write a comment.....">
              </div>
            </div>
            <div class="paper-plan-share">
              <img src="{{ asset('theme_assets/images/paper-plan.svg') }}" alt="">
            </div>
          </div>
        </div>
        <!-- ####################################### -->
      </div>
    </div>
  </div>
</section>
@endsection