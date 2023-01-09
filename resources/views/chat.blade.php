@extends('layouts.no_footer') @section('content')
<style>
    .container-chat {
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
        /* width: 85%; */
    }
    .headind_srch {
        padding: 10px 29px 10px 20px;
        overflow: hidden;
        border-bottom: 1px solid #c4c4c4;
    }

    .recent_heading h4 {
        color: #49516f;
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
        display: inline-block;
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
        height: 100%;
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
        text-shadow: #49516f;
    }
    .mesgs {
        float: left;
        padding: 30px 15px 0 25px;
        width: 60%;
        overflow-y: scroll;
    }

    .sent_msg p {
        background: #1e6f5c;
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
        width: 80%;
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

    .menu-chat{
        border: none !important;
        outline: none !important;
    }
    .menu-chat:focus {
        outline: none !important;
        border: none !important;
    }
</style>
<body>
    <div class="container-chat">
        <div class="messaging">
            <div class="inbox_msg rounded-4">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading my-3 ms-3 d-block">
                            <h4 class="fw-bolder fs-2">Chat</h4>
                        </div>
                        <div class="srch_bar">
                            <div class="stylish-input-group">
                                <div class="d-flex justify-content-around align-items-center w-100">
                                    <div class="item-content d-flex justify-content-between align-items-center bg-white rounded-4 border border-dark border-1" style="height: 60px">
                                        <form class="d-flex nav-item search-form px-2" role="search">
                                            <input
                                                class="search-bar me-4 w-100"
                                                type="search"
                                                placeholder="Cari pengguna"
                                                aria-label="Search"
                                            />
                                        </form>

                                        <div class="dropdown">
                                            <button
                                                class="btn pt-2"
                                                href="#"
                                                role="button dropdown-toggle"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="bi bi-calendar3 fs-4"></i>
                                            </button>

                                            <div
                                                class="dropdown-menu dropdown-menu-center wrapper"
                                            >
                                                <header>
                                                    <p class="current-date"></p>
                                                    <div class="icons">
                                                        <span
                                                            id="prev"
                                                            class="material-symbols-rounded"
                                                            ><i
                                                                class="bi bi-arrow-left-circle"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            id="next"
                                                            class="material-symbols-rounded"
                                                            ><i
                                                                class="bi bi-arrow-right-circle"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                </header>
                                                <div class="calendar">
                                                    <ul class="weeks">
                                                        <li>Sun</li>
                                                        <li>Mon</li>
                                                        <li>Tue</li>
                                                        <li>Wed</li>
                                                        <li>Thu</li>
                                                        <li>Fri</li>
                                                        <li>Sat</li>
                                                    </ul>
                                                    <ul class="days"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn m-1" style="background: #979797">
                                            <i class="fa fa-search text-white" aria-hidden="true"
                                            ></i>
                                        </button>
                                    </div>                                    
                                    <img src="img/filter.png">
                                </div>  
                            </div>
                        </div>
                    </div>
                    <button type="button" class=" btn d-flex align-items-center gap-3 m-3 ms-3 menu-chat" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <img src="img/group-chat.png">
                        <span class="fs-5" style="color: #49516F;">New Group Chat</span>
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content px-4 py-4">
                            <div class="mb-3">
                            <h1 class="fs-5 fw-bold" id="staticBackdropLabel" style="color: #49516F; opacity: 0.7;">Masukan Nama Group</h1>
                            </div>
                            <div class="">
                                <form class="d-flex nav-item search-form border border-dark rounded-4 mb-3 py-3" style="width: 92%" role="search">
                                    <input
                                        class="search-bar px-4 me-4 w-100"
                                        type="search"
                                        placeholder="Wedding Vanessa"
                                        aria-label="Search"
                                    />
                                </form>
                                <div class="d-flex justify-content-evenly align-items-center gap-2">
                                    <div class="item-content d-flex justify-content-between align-items-center bg-white rounded-4 border border-dark border-1 w-100" style="height: 60px">
                                        <form class="d-flex nav-item search-form" role="search">
                                            <input
                                                class="search-bar px-4 me-4 w-100"
                                                type="search"
                                                placeholder="Cari pengguna"
                                                aria-label="Search"
                                            />
                                        </form>

                                        <div class="dropdown">
                                            <button
                                                class="btn pt-2"
                                                href="#"
                                                role="button dropdown-toggle"
                                                data-bs-toggle="dropdown"
                                                aria-expanded="false"
                                            >
                                                <i class="bi bi-calendar3 fs-4"></i>
                                            </button>

                                            <div
                                                class="dropdown-menu dropdown-menu-center wrapper"
                                            >
                                                <header>
                                                    <p class="current-date"></p>
                                                    <div class="icons">
                                                        <span
                                                            id="prev"
                                                            class="material-symbols-rounded"
                                                            ><i
                                                                class="bi bi-arrow-left-circle"
                                                            ></i
                                                        ></span>
                                                        <span
                                                            id="next"
                                                            class="material-symbols-rounded"
                                                            ><i
                                                                class="bi bi-arrow-right-circle"
                                                            ></i
                                                        ></span>
                                                    </div>
                                                </header>
                                                <div class="calendar">
                                                    <ul class="weeks">
                                                        <li>Sun</li>
                                                        <li>Mon</li>
                                                        <li>Tue</li>
                                                        <li>Wed</li>
                                                        <li>Thu</li>
                                                        <li>Fri</li>
                                                        <li>Sat</li>
                                                    </ul>
                                                    <ul class="days"></ul>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn m-1" style="background: #979797">
                                            <i class="fa fa-search text-white" aria-hidden="true"
                                            ></i>
                                        </button>
                                    </div>                                    
                                    <img src="img/filter.png">
                                </div>
                                <h5 class="fw-bold my-3" style="color: #49516F;">Add to Group Chat</h5>  
                                <div class="d-flex align-items-center justify-content-between mb-4 gap-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img
                                            
                                            src="/img/pp.png"
                                            alt="sunil"
                                        />
                                        
                                        <h5 class="mb-0">
                                            The Aesthetic
                                        </h5>
                                    </div>
                                    <span class="fs-6 rounded-pill px-2 text-white" style="background: #49516F">Following</span>
                                    <input class="form-check-input mb-1 checkallthis" type="checkbox" value="" id="check-TheAesthetic"/>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4 gap-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img
                                            class="rounded-circle"
                                            src="/img/laki.png"
                                            alt="sunil"
                                        />
                                        
                                        <h5 class="mb-0">
                                            Gerald Tan
                                        </h5>
                                    </div>
                                    <input class="form-check-input mb-1 checkallthis" type="checkbox" value="" id="check-TheAesthetic"/>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4 gap-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <img
                                            
                                            src="/img/pp.png"
                                            alt="sunil"
                                        />
                                        
                                        <h5 class="mb-0">
                                            Garuda Katering
                                        </h5>
                                    </div>
                                    <span class="fs-6 rounded-pill px-2 text-white" style="background: #49516F">Following</span>
                                    <input class="form-check-input mb-1 checkallthis" type="checkbox" value="" id="check-TheAesthetic"/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn menu-chat text-white" style="background: linear-gradient(90deg, #093028 0%, #237A57 100%);">Buat Group</button>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="inbox_chat">
                        <div class="chat_list active_chat">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        The Aesthetic
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        Shreaton
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        Yunita Sely
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        Badzlan
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        Iyan
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        Muhajir
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat_list">
                            <div class="chat_people">
                                <div class="chat_img">
                                    <img
                                        class="img"
                                        src="/img/pp.png"
                                        alt="sunil"
                                    />
                                </div>
                                <div class="chat_ib">
                                    <h5>
                                        Muhajir
                                        <i class="bi bi-patch-check-fill"></i
                                        ><span class="chat_date">12:00</span>
                                    </h5>
                                    <p>Halo Vanessa terima kasih...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mesgs">
                    <div class="d-flex align-items-center mb-5 gap-3">
                        <div>
                            <img
                                
                                src="/img/pp.png"
                                alt="sunil"
                            />
                        </div>
                        <div>
                            <h5 class="mb-0">
                                The Aesthetic
                                <i class="bi bi-patch-check-fill" style="color: #237A57"></i>
                                <span class="fs-6 rounded-pill px-2 text-white" style="background: #237A57">Venue</span>
                            </h5>
                            <span >Online</span>
                        </div>
                    </div>
                    <div class="msg_history">
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img
                                    class="img"
                                    src="/img/pp.png"
                                    alt="sunil"
                                />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>
                                        Test which is a new approach to have all
                                        solutions
                                    </p>
                                    <span class="time_date">
                                        11:01 AM | June 9</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="outgoing_msg">
                            <div class="sent_msg">
                                <p>
                                    Test which is a new approach to have all
                                    solutions
                                </p>
                                <span class="time_date">
                                    11:01 AM | June 9</span
                                >
                            </div>
                        </div>
                        <div class="incoming_msg">
                            <div class="incoming_msg_img">
                                <img
                                    class="img"
                                    src="/img/pp.png"
                                    alt="sunil"
                                />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>Test, which is a new approach to have</p>
                                    <span class="time_date">
                                        11:01 AM | Yesterday</span
                                    >
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
                            <div class="incoming_msg_img">
                                <img
                                    class="img"
                                    src="/img/pp.png"
                                    alt="sunil"
                                />
                            </div>
                            <div class="received_msg">
                                <div class="received_withd_msg">
                                    <p>
                                        We work directly with our designers and
                                        suppliers, and sell direct to you, which
                                        means quality, exclusive products, at a
                                        price anyone can afford.
                                    </p>
                                    <span class="time_date">
                                        11:01 AM | Today</span
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="type_msg mt-3">
                        <div class="input_msg_write d-flex align-items-center justify-content-around my-3 gap-2">
                            <div class="border d-flex w-100 justify-content-between align-items-center rounded shadow-sm">
                                <input
                                    type="text"
                                    class="rounded p-3 w-100"
                                    placeholder="Tulis pesan..."
                                />
                                <div class="dropup-center dropup">
                                    <button class="btn menu-chat" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="img/menu-chat.png">
                                    </button>
                                    <ul class="dropdown-menu">
                                        <div class="d-flex justify-content-around align-items-center mt-2 me-1" style="width: 270px">
                                            <li>
                                                <a class="dropdown-item mx-auto d-flex justify-content-center align-items-center rounded-circle" href="#" style="width: 50px;
                                                height: 50px;background: #8D79F6;">
                                                <div class="px-3 py-3 mx-auto rounded-circle d-flex justify-content-center align-items-center"  style="width: 50px; height: 50px;">
                                                    <img src="img/dokumen.png">
                                                </div>
                                                </a>
                                                <p class="mt-2">Dokumen</p>    
                                            </li>
                                            <li>
                                                <a class="dropdown-item mx-auto d-flex justify-content-center align-items-center rounded-circle" href="#" style="width: 50px;
                                                height: 50px;background:#FF6584;">
                                                <div class="px-3 py-3 mx-auto rounded-circle d-flex justify-content-center align-items-center"  style="width: 50px; height: 50px;">
                                                    <img src="img/galeri.png">
                                                </div>
                                                </a>
                                                <p class="mt-2">Galeri</p>    
                                            </li>
                                            <li>
                                                <a class="dropdown-item mx-auto d-flex justify-content-center align-items-center rounded-circle" href="#" style="width: 50px;
                                                height: 50px;background: #FF6584;">
                                                <div class="px-3 py-3 mx-auto rounded-circle d-flex justify-content-center align-items-center"  style="width: 50px; height: 50px;">
                                                    <img src="img/loc.png">
                                                </div>
                                                </a>
                                                <p class="mt-2">Lokasi</p>    
                                            </li>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn rounded-circle btn-primary" type="button">
                                <i class="bi bi-mic"></i>
                            </button>
                            <button class="btn rounded-circle text-white" style="background: #237A57" type="button">
                                <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
