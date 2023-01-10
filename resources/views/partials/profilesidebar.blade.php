
<div class="col-3">
    <div class="container" style="width: 300px; border-radius: 10px; margin-top: 60px;background-color: white;">
        <section class="profile">
            <div class="profile-image">
                <a href="#">    
                    <img src="{{ auth()->user()->avatar }}" width="47px" height="47px" />
                </a>
            </div>
            <div class="profile-name">
                <a href="#">{{ auth()->user()->name }}</a>
            </div>
        </section>
        <section class="dashboard">
            <div class="dashboard-title">
                <a href="/maripay">
                    <p><i class="bi bi-wallet"></i> Maripay</p>
                </a>
                <a href="">
                    <p><i class="bi bi-star"></i> Goal</p>
                </a>
                <a href="">
                    <p><i class="bi bi-file-bar-graph"></i> RAB</p>
                </a>
                <a href="">
                    <p><i class="bi bi-check-square"></i> Checklist</p>
                </a>
                <a href="/feed">
                    <p><i class="bi bi-images"></i> Feed</p>
                </a>
                <a href="">
                    <p><i class="bi bi-people-fill"></i> Following</p>
                </a>
                <a href="">
                    <p><i class="bi bi-gear"></i> Setting</p>
                </a>
            </div>
            <div class="dashboard-data">
                <p>Rp 60,000,000</p>
                <p>Rp -40,000,000</p>
            </div>
        </section>
        <section class="kotak-masuk">
            <i class="bi bi-envelope"></i>
            <span>Kotak Masuk</span>
        </section>
        <section class="contact">
            <div class="contact-title">
                <a href="/chat">
                    <p><i class="bi bi-chat"></i> Chat</p>
                </a>
                <a href="">
                    <p><i class="bi bi-journal-text"></i> Ulasan</p>
                </a>
                <a href="">
                    <p><i class="bi bi-bell"></i> Notification</p>
                </a>
                <a href="">
                    <p><i class="bi bi-heart-pulse"></i> Maritory Care</p>
                </a>
                <a href="/logout">
                    <strong><i class="bi bi-box-arrow-left"></i> Log Out</strong>
                </a>
            </div>
            <div class="contact-data">
                <p>5</p>
                <p>1</p>
                <p>10</p>
                <p>2</p>
            </div>
        </section>
    </div>
</div>