@extends('layouts.app')
@section('stylesheet')
<link href="{{url('assets/css/sticky-footer-navbar.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/profile-style.css')}}" rel="stylesheet" type="text/css" />
@stop('stylesheet')
@section('content')

<style type="text/css">
#kimkundad .ap-user-head {
    border-bottom: 1px solid #efefef;
    margin-bottom: 35px;
    text-align: center;
}
#kimkundad .ap-user-dscription {
    margin-bottom: 20px;
}
#kimkundad .ap-user-description-in {
    font-family: georgia,arial,helvetica,sans-serif;
    font-size: 15px;
    height: 42px;
    overflow: hidden;
}
#kimkundad .ap-user-mini-status {
    margin-bottom: 20px;
}
#kimkundad .ap-user-mini-status span {
    border-left: 1px solid #ddd;
    color: #666;
    font-size: 15px;
    margin-right: 5px;
    padding-left: 10px;
}
#kimkundad .ap-user-mini-status span:first-child {
    margin-right: 0;
    border-left: 0;
    padding-left: 0;
}
#kimkundad .ap-user-head {
    border-bottom: 1px solid #efefef;
    margin-bottom: 35px;
    text-align: center;
}
#kimkundad .ap-user-head .ap-user-avatar {
    display: table;
    margin: -95px auto 0;
}
#kimkundad .ap-user-avatar {
    margin-right: 10px;
    position: relative;
}
#kimkundad .ap-user-head .ap-user-avatar img {
    border-radius: 50%;
}
#kimkundad .ap-user-avatar>span, #kimkundad .ap-user-avatar img {
    display: block;
    box-shadow: none;
}
#kimkundad .ap-user-head .ap-user-name {
    font-size: 30px;
}
#anspress .ap-user-name {
    color: #333;
    display: block;
    font-size: 16px;
    font-weight: 600;
    white-space: nowrap;
}
#kimkundad .ap-user-cover {

    border-radius: 3px;
    height: 250px;
    margin-bottom: 20px;
    position: relative;
}
#kimkundad .ap-user-cover .ap-user-cover-img {
    background-repeat: no-repeat;
    background-size: cover;
    display: block;
    height: 100%;
}

#kimkundad .ap-about-rep-label {
    color: #aaa;
    display: block;
    font-size: 13px;
}
#kimkundad .ap-about-rep-count {
    font-size: 25px;
    margin-right: 20px;
}
#kimkundad .ap-about-rep-chart {
    width: 100%;
    height: 53px;
    border-bottom: 1px dashed #8fc77e;
}
#kimkundad .ap-reputation-item {
    border-top: 1px solid #f4f4f4;
    padding: 15px 0;
}
#kimkundad .ap-reputation-item.positive .point {
    background: #D8F9DB;
}
#kimkundad .ap-reputation-item .ap-reputation-event {
    display: block;
    float: left;
    margin-right: 10px;
    width: 100%;
}
#kimkundad .ap-reputation-item .point {
    border: 1px solid rgba(0,0,0,0.1);
    border-radius: 3px;
    float: left;
    font-size: 13px;
    font-weight: 600;
    margin-right: 15px;
    padding: 0;
    text-align: center;
    width: 35px;
}
#kimkundad #ap-user-menu>li {
    border-bottom: 1px solid #eee;
    margin: 0;
    padding: 0;
}
#kimkundad #ap-user-menu>li.active>a {
    background: none repeat scroll 0 0 #f5f5f5;
}
</style>

<div class="container" style="padding: 25px 15px 50px 15px; margin-bottom:30px;">
    <div class="row">

          <div class="col-md-9">
            <div id="kimkundad">


              <div class="ap-user" id="ap-user">



                <div class="ap-user-cover clearfix">
                  <div class="ap-user-cover-img">

            <div class="ap-user-cover-img" style="background-image:url(http://demo.rakmaetravel.com/admin/cusimage/1479081684-1418227316-AirAsia01r-o.jpg)" data-view="user_cover_690"></div>

                  </div>
                </div>


                <div class="ap-user-head clearfix">

                  <div class="ap-user-avatar">
                    <img data-view="user_avatar_690" alt="" src="http://demo.rakmaetravel.com/admin/cusimage/1479081684-bitstripavatarprofilepic.jpeg" class="avatar avatar-150 photo" width="150" height="150">
                  </div>
                  <a class="ap-user-name" href="#">Shuvit Funsok</a>

                  <div class="ap-user-mini-status">
                    <span>1 Blog.</span>
                    <span class="ap-user-reputation"><i class="ap-questions-featured fa fa-trophy" style="margin-left:8px;"></i> Level. 1</span>
                    <span>0 Vote</span>
                    <span>11 View</span>
                    <span>0 Comments</span>
                  </div>

                  <div class="ap-user-dscription">

                      <div class="ap-user-description-in" style="height: 84px;">

                              ทุกคนที่มาวันนี้ ต่างก็เดินทางลำบาก เดินไกล ร้อน หิว เหนื่อย  เป็นลมกันนับร้อย แต่ทุกคนเต็มใจ ไม่ได้ยินคำว่า ไม่น่ามาเลยเข้าหูสักนิด  เพราะทุกคนสำนึกตลอดว่าพระองค์ท่านก็อดทน และเหน็ดเหนื่อยกว่านี้มาตลอดพระชนม์ชีพ  เพื่อพวกเราประชาชนของพระองค์ท่านเอง
                    </div>

                </div>


                </div>



                <div class="ap-user-info ">
                <div class="ap-user-avatar">
          <img data-view="user_avatar_1980" alt="" src="http://demo.rakmaetravel.com/admin/cusimage/1479081684-bitstripavatarprofilepic.jpeg" class="avatar avatar-40 photo" width="40" height="40" data-pin-nopin="true">
                        </div>
                <div class="ap-user-data">
          <a class="ap-user-name" href="#">Shuvit Funsok</a>
          <span class="ap-user-reputation"><i class="ap-questions-featured fa fa-trophy" style="margin-left:8px;"></i> Level. 1</span>                </div>
                <div class="ap-user-info-btns">
                          </div>
            </div>







            <div class="ap-user-navigation clearfix">
      <ul id="ap-user-menu" class="ap-user-menu ap_collapse_menu clearfix">
        <li><a href="profile.html" class="ap-user-menu-orders apicon-shopping-cart"><i class="fa fa-street-view"></i> My Profile</a></li>
      <!--  <li><a href="#" class="ap-user-menu-activity-feed apicon-rss"><i class="fa fa-rss "></i> Activity Feed</a></li> -->
        <li><a href="myblog.html" class="ap-user-menu-activity-feed apicon-rss"><i class="fa fa-newspaper-o"></i> My blog</a></li>
        <li><a href="mycomment.html" class="ap-user-menu-activity-feed apicon-rss"><i class="fa fa-commenting-o"></i> Comment</a></li>
       <!-- <li><a href="#" class="ap-user-menu-activity-feed apicon-rss"><i class="fa fa-gift"></i> Withdraw</a></li> -->
        <li><a href="logout.php" class="ap-user-menu-activity-feed apicon-rss"><i class="fa fa-sign-out"></i> Log out</a></li>
      </ul></div>






      <div class="ap-user-lr row">

        <div class="col-md-9">

          <div class="ap-profile-box clearfix" style="margin-top: -65px;">

            <h3 class="ap-user-page-title clearfix">My profile  </h3>

            <div>

              <form action="admin/process/user-profile/productUpdate.php" method="post" enctype="multipart/form-data" name="product">
                <div class="form-group">
                  <label for="exampleInputEmail1">First name</label>
                  <input type="text" class="form-control" name="fname" value="Shuviit" required="">
                  <input type="hidden" name="id" class="form-control" value="Mg==" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Last name</label>
                  <input type="text" class="form-control" name="lname" value="Funsok" required="">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nickname</label>
                  <input type="text" class="form-control" name="nickname" value="Shuvit Funsok" required="">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" value="ighostzaa@gmail.com" required="">
                </div>






                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" rows="4" name="bio" placeholder="Textarea">ทุกคนที่มาวันนี้ ต่างก็เดินทางลำบาก เดินไกล ร้อน หิว เหนื่อย  เป็นลมกันนับร้อย แต่ทุกคนเต็มใจ ไม่ได้ยินคำว่า ไม่น่ามาเลยเข้าหูสักนิด  เพราะทุกคนสำนึกตลอดว่าพระองค์ท่านก็อดทน และเหน็ดเหนื่อยกว่านี้มาตลอดพระชนม์ชีพ  เพื่อพวกเราประชาชนของพระองค์ท่านเอง 55+</textarea>
                </div>



                      <div class="clearfix"></div>
               <hr>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>

            </div>

          </div>

        </div>

      </div>





















              </div>



            </div>

          </div>






          <div class="col-md-3">
              <div id="sidebar" class="affix">
  <div>
    <img class="img-responsive" src="{{url('assets/image/14610482951461048307l.jpg')}}">
  </div>
  <a class="themes-widget" href="#/">
    <i class="fa fa-pie-chart"></i>
    <div class="no-overflow">
      <strong>Browse Themes</strong>
      <p>Our premium WP themes.</p>
    </div>
  </a>
  <a class="themes-widget" href="#">
    <i class="fa fa-credit-card "></i>
    <div class="no-overflow">
      <strong>Browse Extensions</strong>
      <p>Get AnsPress add-ons.</p>
    </div>
  </a>
</div>          </div>



    </div>

 </div>


@endsection
