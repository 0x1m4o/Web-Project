<style>
  /* Import Google font - Poppins */
.wrapper{
  width: 400px;
  background: #fff;
  border-radius: 10px;
  box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}
.wrapper header{
  display: flex;
  align-items: center;
  padding: 25px 30px 10px;
  justify-content: space-between;
}
header .icons{
  display: flex;
}
header .icons span{
  height: 38px;
  width: 38px;
  margin: 0 1px;
  cursor: pointer;
  color: #878787;
  text-align: center;
  line-height: 38px;
  font-size: 1.9rem;
  user-select: none;
  border-radius: 50%;
}
.icons span:last-child{
  margin-right: -10px;
}
header .icons span:hover{
  background: #f2f2f2;
}
header .current-date{
  font-size: 1.45rem;
  font-weight: 500;
}
.calendar{
  padding: 20px;
}
.calendar ul{
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  text-align: center;
}
.calendar .days{
  margin-bottom: 20px;
}
.calendar li{
  color: #333;
  width: calc(100% / 7);
  font-size: 1.07rem;
}
.calendar .weeks li{
  font-weight: 500;
  cursor: default;
}
.calendar .days li{
  z-index: 1;
  cursor: pointer;
  position: relative;
  margin-top: 30px;
}
.days li.inactive{
  color: #aaa;
}
.days li.active{
  color: #fff;
}
.days li::before{
  position: absolute;
  content: "";
  left: 50%;
  top: 50%;
  height: 40px;
  width: 40px;
  z-index: -1;
  border-radius: 50%;
  transform: translate(-50%, -50%);
}
.days li.active::before{
  background: #9B59B6;
}
.days li:not(.active):hover::before{
  background: #f2f2f2;
}

.search-bar {
    border: none;
    width: 85%;
}

.search-bar:focus {
    outline: none;
}

.dropdown button {
    border: none;
}
</style>


<nav class="navbar navbar-expand-lg" style="background: #EDEEF7;font-size: 13px;cursor: pointer;">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Feed</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Checklist</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Rab</a>
          </li>
          <li class="nav-item" style="margin-left: 1200px;">
            <a class="nav-link">Mulai Jualan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Mitra Maritory</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Tentang Maritory</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg" style="background: #1E6F5C">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="/img/logos.png" alt="Logo" width="150" height="55" class="d-inline-block align-text-top">
          </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container bg-white rounded" id="navbarSupportedContent" style="width: 900px;">
        <form class="d-flex m-auto" role="search" style="padding: 5px;">
          <input
            class="search-bar me-2"
            type="search"
            placeholder="Cari Vendor atau Lokasi..."
            aria-label="Search"
          />
          <div class="dropdown ms-5">
            <button
              class="btn"
              href="#"
              role="button dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="bi bi-calendar3 fs-4"></i>
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
            style="background: #fdb662"
            type="submit"
          >
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
      <a class="btn btn-light mx-3" style="color: #FDB662;background: white;" role="button" href="/login">Masuk</a>
      <a class="btn" style="background: #FDB662;color: white;" role="button" href="/signup">Daftar</a>
    </div>
  </nav>