@extends('layouts.main')

@section('content')
<style>
    .container {
      max-width: 1170px;
      margin: auto;
      margin-top: 75px;
    }
    .img {
      max-width: 100%;
    }
    .inbox_people {
      background: #f8f8f8 none repeat scroll 0 0;
      float: left;
      overflow: hidden;
      width: 40%;
      border-right: 1px solid #c4c4c4;
    }
    .inbox_msg {
      border: 1px solid #c4c4c4;
      clear: both;
      overflow: hidden;
    }
    .top_spac {
      margin: 20px 0 0;
    }

    .recent_heading {
      float: left;
      width: 40%;
    }
    .srch_bar {
      /* display: inline-block;
      text-align: right; */
      width: 65%;
    }
    .headind_srch {
      padding: 10px 29px 10px 20px;
      overflow: hidden;
      border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
      color: #49516F;
      font-size: 21px;
      margin: auto;
    }
    .srch_bar input {
      border: 1px solid #cdcdcd;
      border-width: 0 0 1px 0;
      width: 80%;
      padding: 2px 0 4px 6px;
      background: none;
    }
    .srch_bar .input-group-addon button {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border: medium none;
      padding: 0;
      color: #707070;
      font-size: 18px;
    }
    .srch_bar .input-group-addon {
      margin: 0 0 0 -27px;
    }

    .chat_ib h5 {
      font-size: 15px;
      color: #464646;
      margin: 0 0 8px 0;
    }
    .chat_ib h5 span {
      font-size: 13px;
      float: right;
    }
    .chat_ib p {
      font-size: 14px;
      color: #989898;
      margin: auto;
    }
    .chat_img {
      float: left;
      width: 11%;
    }
    .chat_ib {
      float: left;
      padding: 0 0 0 15px;
      width: 88%;
    }

    .chat_people {
      overflow: hidden;
      clear: both;
    }
    .chat_list {
      border-bottom: 1px solid #c4c4c4;
      margin: 0;
      padding: 18px 16px 10px;
    }
    .inbox_chat {
      height: 550px;
      overflow-y: scroll;
    }

    .inbox_chat::-webkit-scrollbar {
    display: none;
    }

    .active_chat {
      background: #ebebeb;
    }

    .incoming_msg_img {
      display: inline-block;
      width: 6%;
    }
    .received_msg {
      display: inline-block;
      padding: 0 0 0 10px;
      vertical-align: top;
      width: 92%;
    }
    .received_withd_msg p {
      background: #ebebeb none repeat scroll 0 0;
      border-radius: 3px;
      color: #646464;
      font-size: 14px;
      margin: 0;
      padding: 5px 10px 5px 12px;
      width: 100%;
    }
    .time_date {
      color: #747474;
      display: block;
      font-size: 12px;
      margin: 8px 0 0;
    }
    .received_withd_msg {
      width: 57%;
      text-shadow: #49516F;
    }
    .mesgs {
      float: left;
      padding: 30px 15px 0 25px;
      width: 60%;
      overflow-y: scroll;
    }

    .sent_msg p {
    background: #1E6F5C;
      border-radius: 3px;
      font-size: 14px;
      margin: 0;
      color: #fff;
      padding: 5px 10px 5px 12px;
      width: 100%;
    }
    .outgoing_msg {
      overflow: hidden;
      margin: 26px 0 26px;
    }
    .sent_msg {
      float: right;
      width: 46%;
    }
    .input_msg_write input {
      background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
      border: medium none;
      color: #4c4c4c;
      font-size: 15px;
      min-height: 48px;
      width: 100%;
    }

    .type_msg {
      border-top: 1px solid #c4c4c4;
      position: relative;
    }
    .msg_send_btn {
      background: #05728f none repeat scroll 0 0;
      border: medium none;
      border-radius: 50%;
      color: #fff;
      cursor: pointer;
      font-size: 17px;
      height: 33px;
      position: absolute;
      right: 0;
      top: 11px;
      width: 33px;
    }
    .messaging {
      padding: 0 0 50px 0;
    }
    .msg_history {
      height: 516px;
      overflow-y: auto;
    }
    .write_msg:focus {
      outline: none;
    }
  </style>
<body>
    <div class="container">
      <div class="messaging">
        <div class="inbox_msg rounded-4">
          <div class="inbox_people">
            <div class="headind_srch">
              <div class="recent_heading">
                <h4 class="fw-bold fs-1">Chat</h4>
              </div>
              <div class="srch_bar">
                <div class="stylish-input-group">
                  <input type="text" class="search-bar" placeholder="Search" />
                  <span class="input-group-addon">
                    <button type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                  </span>
                </div>
              </div>
            </div>
            <div class="inbox_chat">
              <div class="chat_list active_chat">
                <div class="chat_people">
                  <div class="chat_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                  <div class="chat_ib">
                    <h5>The Aesthetic <i class="bi bi-patch-check-fill"></i><span class="chat_date">12:00</span></h5>
                    <p>Halo Vanessa terima kasih...</p>
                  </div>
                </div>
              </div>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                  <div class="chat_ib">
                    <h5>Shreaton <i class="bi bi-patch-check-fill"></i><span class="chat_date">12:00</span></h5>
                    <p>Halo Vanessa terima kasih...</p>
                  </div>
                </div>
              </div>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                  <div class="chat_ib">
                    <h5>Yunita Sely <i class="bi bi-patch-check-fill"></i><span class="chat_date">12:00</span></h5>
                    <p>Halo Vanessa terima kasih...</p>
                  </div>
                </div>
              </div>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                  <div class="chat_ib">
                    <h5>Badzlan <i class="bi bi-patch-check-fill"></i><span class="chat_date">12:00</span></h5>
                    <p>Halo Vanessa terima kasih...</p>
                  </div>
                </div>
              </div>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                  <div class="chat_ib">
                    <h5>Iyan <i class="bi bi-patch-check-fill"></i><span class="chat_date">12:00</span></h5>
                    <p>Halo Vanessa terima kasih...</p>
                  </div>
                </div>
              </div>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                  <div class="chat_ib">
                    <h5>Muhajir <i class="bi bi-patch-check-fill"></i><span class="chat_date">12:00</span></h5>
                    <p>Halo Vanessa terima kasih...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mesgs">
            <div class="msg_history">
              <div class="incoming_msg">
                <div class="incoming_msg_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>Test which is a new approach to have all solutions</p>
                    <span class="time_date"> 11:01 AM | June 9</span>
                  </div>
                </div>
              </div>
              <div class="outgoing_msg">
                <div class="sent_msg">
                  <p>Test which is a new approach to have all solutions</p>
                  <span class="time_date"> 11:01 AM | June 9</span>
                </div>
              </div>
              <div class="incoming_msg">
                <div class="incoming_msg_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>Test, which is a new approach to have</p>
                    <span class="time_date"> 11:01 AM | Yesterday</span>
                  </div>
                </div>
              </div>
              <div class="outgoing_msg">
                <div class="sent_msg">
                  <p>Apollo University, Delhi, India Test</p>
                  <span class="time_date"> 11:01 AM | Today</span>
                </div>
              </div>
              <div class="incoming_msg">
                <div class="incoming_msg_img"><img class="img" src="/img/pp.png" alt="sunil" /></div>
                <div class="received_msg">
                  <div class="received_withd_msg">
                    <p>We work directly with our designers and suppliers, and sell direct to you, which means quality, exclusive products, at a price anyone can afford.</p>
                    <span class="time_date"> 11:01 AM | Today</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="type_msg mt-3">
              <div class="input_msg_write">
                <input type="text" class="write_msg rounded-pill shadow-sm p-3" placeholder="Tulis pesan..." />
                <button class="msg_send_btn" type="button"><i class="fa fa-voice" aria-hidden="true"></i></button>
                <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection