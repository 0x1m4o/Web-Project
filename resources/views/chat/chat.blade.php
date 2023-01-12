@extends('layouts.no_footer')

@section('content')
    <div class="container mt-5">
        <i class="bi bi-arrow-left-short" style="font-size: 40px;"></i>   
        <div class="chat-content">
            <h2>Chat</h2>
            <div class="chat row">
                <div class="col-sm-2 bg-white" id="navbarSupportedContent" style="width: 320px; border-radius: 12px; border: 1px solid #49516F">
              <form class="d-flex" role="search" style="padding: 5px 0px 5px 0px;">
                <input
                  class="search-bar me-2"
                  type="search"
                  placeholder="Cari Pengguna"
                  aria-label="Search"
                />
                <div class="dropdown">
                  <button
                    class="btn"
                    href="#"
                    role="button dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <i class="bi bi-calendar3 fs-5"></i>
                  </button>
    
                  <div class="dropdown-menu wrapper">
                    <header>
                      <p class="current-date"></p>
                      <div class="icons">
                        <span id="prev" class="material-symbols-rounded"
                          ><i class="bi bi-arrow-left-circle"></i
                        ></span>
                        <span id="next" class="material-symbols-rounded"
                          ><i class="bi bi-arrow-right-circle"></i
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
    
                <button
                  class="btn text-light"
                  style="background: #979797;"
                  type="submit"
                >
                  <i class="bi bi-search"></i>
                </button>
              </form>
            </div>
            <div class="filter col-sm-1" style="margin-top: 20px;">
                <i class="bi bi-sliders"></i>
            </div>
        </div>
        <div class="row">
          <a href="#">
            <img src="/img/group.png" alt="Group">
          </a>
          <p>New Group Chat</p>
        </div>
        </div>    
    </div>   
@endsection