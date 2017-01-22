@extends('layouts.app')
@section('stylesheet')
<link href="{{url('assets/css/sticky-footer-navbar.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/profile-style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{url('assets/css/chat.css')}}" rel="stylesheet" type="text/css" />
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

<div class="container" style="padding: 5px 15px 0px 15px; margin-bottom:30px;">
    <div class="row">

    <div class="col-md-12">
      <div id="kimkundad">

                  <div class="row">







          <div class="ap-questions" style="margin-bottom: 10px;">





              <div class="ap-questions-item clearfix question type-question status-publish hentry question_category-updates featured-question answer-count-11 pmpro-has-access">
                <div class="ap-questions-inner">

                  <div class="ap-avatar ap-pull-left">
                    <a href="#" rel="popover" >
                      <img alt="" src="http://demo.rakmaetravel.com/admin/cusimage/1479081684-bitstripavatarprofilepic.jpeg" data-pin-nopin="true">      </a>
                  </div>

                  <div class="ap-list-counts">
                    <a class="ap-questions-count ap-questions-acount" href="#" style="border: 2px solid #b26642;"><span>0</span> ans</a>
                    <span class="ap-questions-count ap-questions-vcount">
                       <span>0</span>
                         votes
                     </span>
                   </div>

                  <div class="ap-questions-summery no-overflow">

                    <span class="ap-questions-title entry-title" itemprop="title">
                      <i class="ap-questions-featured fa fa-star"></i>
                      <a class="ap-questions-hyperlink" itemprop="url" href="#" rel="bookmark" title="AskBug – WordPress theme released">
                        ติวสอบวัดระดับภาษาญี่ปุ่น JLPT N4 + คลังข้อสอบออนไลน์ มินนะ โนะ นิฮงโกะ みんなの日本語 かんじ N3</a>
                    </span>

                    <div class="ap-display-question-meta">
                      <span class="ap-display-meta-item views"><i>11 views</i></span>
                      <span class="ap-display-meta-item history">
                        <span class="ap-post-history"> <a href="#" style="color: #b26642;">Shuvit Funsok</a> นามปากกา,
                          <a href="#"><time datetime="2016-08-08T11:49:28+00:00">November 14, 2016</time></a>
                        </span>
                      </span>
                      <span class="ap-display-meta-item categories"><i class="fa fa-folder-open-o"></i>
                        <span class="question-categories"><a href="blog-1.html" title="">ญี่ปุ่น</a>
                        </span>
                      </span>
                    </div>

                  </div>


                </div>
              </div>



          </div>











<!-- End blog list -->

                  </div>

              </div>
    </div>

          <div class="col-md-9" style="width: 72%;">
            <iframe width="820" height="550" src="https://www.youtube.com/embed/4KJpXriYC9A?autoplay=1" frameborder="0" allowfullscreen></iframe>

          </div>






          <div class="col-md-3" style="width: 28%;">
              <div id="sidebar" >

                <div class="chat_window">
    <div class="top_menu">

            <div class="title">Chat</div>
            </div><ul class="messages">

            </ul>
            <div class="bottom_wrapper clearfix">
                <div class="message_input_wrapper">
                    <input class="message_input" placeholder="Type your message here..." /></div>
                    <div class="send_message">

                        <div class="icon"></div>
                        <div class="text">Send</div
                        ></div>
                        </div>
                        </div>
                        <div class="message_template">
                            <li class="message"><div class="avatar"></div>
                            <div class="text_wrapper"><div class="text">

                            </div>
                            </div>
                            </li>
                            </div>

              </div>
            </div>


@endsection
@section('scripts')

<script>
(function () {
    var Message;
    Message = function (arg) {
        this.text = arg.text, this.message_side = arg.message_side;
        this.draw = function (_this) {
            return function () {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text);
                $('.messages').append($message);
                return setTimeout(function () {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    };
    $(function () {
        var getMessageText, message_side, sendMessage;
        message_side = 'right';
        getMessageText = function () {
            var $message_input;
            $message_input = $('.message_input');
            return $message_input.val();
        };
        sendMessage = function (text) {
            var $messages, message;
            if (text.trim() === '') {
                return;
            }
            $('.message_input').val('');
            $messages = $('.messages');
            message_side = message_side === 'left' ? 'right' : 'left';
            message = new Message({
                text: text,
                message_side: message_side
            });
            message.draw();
            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 300);
        };
        $('.send_message').click(function (e) {
            return sendMessage(getMessageText());
        });
        $('.message_input').keyup(function (e) {
            if (e.which === 13) {
                return sendMessage(getMessageText());
            }
        });
        sendMessage('Hello Philip! :)');
        setTimeout(function () {
            return sendMessage('Hi Sandy! How are you?');
        }, 1000);
        return setTimeout(function () {
            return sendMessage('I\'m fine, thank you!');
        }, 2000);
    });
}.call(this));
</script>

@stop('scripts')
