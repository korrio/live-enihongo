
@extends('layouts.app')
@section('stylesheet')
<link href="{{url('assets/css/select-project.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/confirm.css')}}" rel="stylesheet" type="text/css" />
@stop('stylesheet')
@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-12 " >
          <h3>คอร์สเรียนทั้งหมด</h3>
          <hr>
          <div class="body-project">

                    <div class="row">

                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#show_detail54">
                          <img src="{{url('assets/image/1480125677senseino-ln-02.png')}}" >
                          </a>
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#show_detail54"> เรียนออนไลน์ภาษาจีนระดับต้น 2 บทที่ 1-10</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาจีนระดับต้น 2 เรียนวันจันทร์, พุธ 20.00 น.
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="https://cdn-images-1.medium.com/fit/c/36/36/1*TdbWtzHIOXJylUwt01nXxQ.jpeg"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> Porr Viranyaporn</a>
                                <div >
                                  <span class="readingPrice">
                                <i class="fa fa-gavel"></i>  2,500 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="show_detail54" role="dialog" style="display: none;">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title" align="center">รายละเอียดคอร์สเรียน</h4>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row ">
                            <div class="course-title"><h3> ภาษาจีนระดับต้น 2  初级汉语 (二) บทที่ 1-10</h3></div>
                            <div class="photo">
                                <img src="{{url('assets/image/1480125677senseino-ln-02.png')}}">
                            </div>
                            <div class="detail">
                                <div class="com1 com">

                                    <div><h5 class="inline2">ช่วงเวลาที่เรียน</h5><h5 class="inline2 line1-r">15 พ.ค. - 26 ก.ค. 2560</h5></div>
                                    <div><h5 class="inline2">วันที่เรียน</h5><h5 class="inline2 line1-r"><span class="monday">จ,</span> <span class="wednesday">พ</span> </h5></div>
                                    <div><h5 class="inline2">เวลาที่เรียน</h5><h5 class="inline2 line1-r">20:00-21:30 น.</h5></div>
                                   <!-- <div ><h5  class="inline2">ชนิดคอร์ด</h5><h5 class="inline2 line1-r"></h5></div> -->
                                    <div><h5 class="inline2">ราคารวม</h5><h5 class="inline2 line1-r">990.00 บาท</h5></div>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer"><div class="pull-left">คุณยังไม่ได้ลงทะเบียนคอร์สเรียนนี้</div>
                    <div class="pull-rught" data-dismiss="modal"><button onclick="gorent(54)">จองคอร์ส</button></div>
                    </div>
                  </div>
                </div>
              </div>








                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1482538915 1 D1.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#"> ไดจิ ภาษาญี่ปุ่นเพื่อการสื่อสาร เล่ม 1 คอร์ส D1</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาญี่ปุ่นเพื่อการสื่อกสาร เรียน เสาร์,อาทิตย์ 10.00 น.
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/841537662654463/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> ขุนพล เมืองละโว้</a>
                                <div >
                                  <span class="readingPrice">
                                  <i class="fa fa-gavel"></i> 1,500 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>


                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1482684367Picture-03-4.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#"> มินนะ โนะ นิฮงโกะ みんなの日本語 เล่ม 1</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาญี่ปุ่นเบื้องต้น เล่ม 1 เรียนวันเสาร์,อาทิตย์ 18.00 น.
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/1271940176162831/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> Djmon Jiruntanin</a>
                                <div >
                                  <span class="readingPrice">
                                  <i class="fa fa-gavel"></i> 950 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>





                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1480354915Senseino-JLPT-05.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#"> ติวสอบวัดระดับภาษาญี่ปุ่น JLPT N5 + คลังข้อสอบออนไลน์</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ติวสอบสอนสด ดูทบทวนได้ พร้อมคลังข้อสอบกว่า 10 ปี
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/543748025829980/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> Djmon Jiruntanin</a>
                                <div >
                                  <span class="readingPrice">
                                  <i class="fa fa-gavel"></i> 950 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>





                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1478145989Minnano-02-02.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#show_detail54"> มินนะ โนะ นิฮงโกะ みんなの日本語 เล่ม 2</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาจีนระดับต้น 2 เรียนวันจันทร์, พุธ 20.00 น.
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/10153873769486781/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> Porr Viranyaporn</a>
                                <div >
                                  <span class="readingPrice">
                                <i class="fa fa-gavel"></i>  2,500 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>



                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1482538915 1 D1.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#"> ไดจิ ภาษาญี่ปุ่นเพื่อการสื่อสาร เล่ม 1 คอร์ส D1</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาญี่ปุ่นเพื่อการสื่อกสาร เรียน เสาร์,อาทิตย์ 10.00 น.
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/841537662654463/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> ขุนพล เมืองละโว้</a>
                                <div >
                                  <span class="readingPrice">
                                  <i class="fa fa-gavel"></i> 1,500 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>


                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1478146056Minnano-03-02.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#"> มินนะ โนะ นิฮงโกะ みんなの日本語 เล่ม 3</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาญี่ปุ่นเบื้องต้น เล่ม 1 เรียนวันเสาร์,อาทิตย์ 18.00 น.
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/1271940176162831/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> Djmon Jiruntanin</a>
                                <div >
                                  <span class="readingPrice">
                                  <i class="fa fa-gavel"></i> 4500 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>





                      <div class="col-sm-4 col-md-3">
                        <div class="thumbnail">
                          <img src="{{url('assets/image/1478145927Minnano-04-01.png')}}" >
                          <div class="caption" style="padding: 3px;">
                            <div class="descript bold">
                                <a href="#"> มินนะ โนะ นิฮงโกะ みんなの日本語 เล่ม 4</a>
                            </div>
                            <div class="descript" style="border-bottom: 1px dashed #999;">
                                ภาษาญี่ปุ่นเบื้องต้น เล่ม 4 เรียนวันอาทิตย์
                            </div>
                            <div class="descript" >
                              <div class="descript-t">
                              <div class="postMetaInline-avatar">
                                  <img src="http://graph.facebook.com/543748025829980/picture?type=square"
                                  class="avatar-image img-circle" >
                              </div>
                              <div class="postMetaInline-authorLockup">
                                <a style="color:#666" class="link link link--darken link--darker u-baseColor--link is-touched"
                                href="#" ><i class="fa fa-user"></i> Djmon Jiruntanin</a>
                                <div >
                                  <span class="readingPrice">
                                  <i class="fa fa-gavel"></i> 750 บาท
                                  </span>
                                </div>
                              </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>










                    </div>



          </div>
        <!--    <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div> -->



        </div>
    </div>
</div>
@endsection
