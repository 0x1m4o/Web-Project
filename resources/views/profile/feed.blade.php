@extends('layouts.main')
@section('styles')
    <style>
        .input-comment input[type=text] {
        width: 100%;
        padding: 15px 5px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #49516F;
        border-radius: 12px;
        -webkit-transition: 0.5s;
        transition: 0.5s;
        outline: none;
        }

        .input-comment input[type=text]:focus {
        border: 3px solid #555;
        }

        .input-comment input::placeholder {
        padding-left: 10px;
        font-weight: bold;
        color: #49516F;
        }


        .feed {
            background-color: white;
            width: 1342px;
            padding: 20px; 
            border-radius: 20px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            margin: auto;
        }

        .tanggapan {
            margin-top: 50px;
            margin-bottom: 35px;
        }

        .like {
            margin-bottom: 10px;
            font-weight: bold;
            color: #49516F; 
        }

        
    </style>
@endsection
@section('content')
    <div class="feed" style="margin-top: 141px; margin-bottom: 30px;">
        <h2 style="font-weight: bold;color: #49516F;">Feeds</h2>
        <hr>
        <div class="custom-select" style="margin-bottom: 75px;">
            <select id="debit" style=" height: 43px;border-radius: 12px; border: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px; margin-right: 45px;">
                <option value="direct" style="color: #49516F;"><b>New Post</b></option>
            </select>
            <select id="debit" style=" height: 43px;border-radius: 12px; border: none;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); padding: 5px;">
                <option value="direct" style="color: #49516F;"><b>Trending</b></option>
            </select>   
        </div>
        <a href="/profilevendor">
            <img src="/img/toko.png" alt="logo toko" style="margin-bottom: 35.5px;">
        </a>
        <hr>
        <div class="produk-feed">
            <img src="/img/produk1.png" alt="Produk 1" style="margin-right: 10px;">
            <img src="/img/produk2.png" alt="Produk 2" style="margin-right: 10px;">
            <img src="/img/produk3.png" alt="Produk 3" style="margin-right: 10px;">
        </div>
        <div class="tanggapan">
            <i class="bi bi-heart" style="font-size: 30px;color: #49516F; margin-right: 20px;"></i>
            <i class="bi bi-chat" style="font-size: 30px;color: #49516F; margin-right: 20px;"></i>
            <i class="bi bi-share" style="font-size: 30px;color: #49516F; margin-right: 20px;"></i>
        </div>
        <div class="deskripsi-feed">
            <h6 class="like">40 likes</h6>
            <h3 style="font-weight: bold; color: #49516F; ">The Aesthetic <sup style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background-color: white;border-radius: 2rem;padding: 2px 10px;border: 1px solid #FFFFFF; font-weight: bold; color: #49516F;font-size: 16px;">MUA</sup></h3>
            <h5 style="font-weight: bold; color: #49516F; ">Graduation Makeup kak @luludiyaul</h5>
            <span style="font-weight: bold; color: #49516F; ">-</span>
            <h5 style="font-weight: bold; color: #49516F; ">Available for</h5>
            <h5 style="font-weight: bold; color: #49516F; ">Wedding | Engagement | Graduation | Bridesmaid | Prewedding | Maternity | Party, dll</h5>
            <span style="font-weight: bold; color: #49516F; ">-</span>
            <span class="tag" style="font-weight: bold; color: #49516F; ">
                <h6>#mua #muabekasi </h6>
            </span>
            <h5 style="font-weight: bold; color: #49516F; opacity: 0.5;font-size: 14px; margin-top: 10px;">View All 26 Comment</h5>
        </div>
        <div class="input-comment">
            <input type="text" placeholder="Add Comment">
        </div>
        <hr>
        <div class="produk-feed">
            <img src="/img/produks1.png" alt="Produk 1" style="margin-right: 10px;">
            <img src="/img/produks2.png" alt="Produk 2" style="margin-right: 10px;">
            <img src="/img/produks3.png" alt="Produk 3" style="margin-right: 10px;">
        </div>
        <div class="tanggapan">
            <i class="bi bi-heart" style="font-weight: bold;font-size: 30px;color: #49516F; margin-right: 20px;"></i>
            <i class="bi bi-chat" style="font-weight: bold;font-size: 30px;color: #49516F; margin-right: 20px;"></i>
            <i class="bi bi-share" style="font-weight: bold;font-size: 30px;color: #49516F; margin-right: 20px;"></i>
        </div>
        <div class="deskripsi-feed">
            <h6 class="like">40 likes</h6>
            <h3 style="font-weight: bold; color: #49516F; ">The Magni Dress <sup style="box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);background-color: white;border-radius: 2rem;padding: 2px 10px;border: 1px solid #FFFFFF; font-weight: bold; color: #49516F;font-size: 16px;">MUA</sup></h3>
            <h5 style="font-weight: bold; color: #49516F; ">Graduation Makeup kak @luludiyaul</h5>
            <span style="font-weight: bold; color: #49516F; ">-</span>
            <h5 style="font-weight: bold; color: #49516F; ">Available for</h5>
            <h5 style="font-weight: bold; color: #49516F; ">Wedding | Engagement | Graduation | Bridesmaid | Prewedding | Maternity | Party, dll</h5>
            <span style="font-weight: bold; color: #49516F; ">-</span>
            <span class="tag" style="font-weight: bold; color: #49516F; ">
                <h6>#mua #muabekasi </h6>
            </span>
            <h5 style="font-weight: bold; color: #49516F; opacity: 0.5;font-size: 14px; margin-top: 10px;">View All 26 Comment</h5>
        </div>
        <div class="input-comment">
            <input type="text" placeholder="Add Comment">
        </div>
    </div>
@endsection