@extends('layouts.app')

@section('content')
    
<div class="contact-container">
        <!-- Title Section -->
        <h2 class="section-title">CONTACT & VISIT</h2>
        <div class="divider"></div>
        <p class="subtitle">All visitors are welcome; langar is served every day.</p>

        <!-- 2x2 Info Cards -->
        <div class="info-grid">
            <div class="info-card">
                <i class="fa-solid fa-location-dot"></i>
                <div class="info-card-content">
                    <div class="card-title">ADDRESS</div>
                    <div class="card-text">Darbar Sharif, Punjab, Pakistan</div>
                </div>
            </div>

            <div class="info-card">
                <i class="fa-regular fa-clock"></i>
                <div class="info-card-content">
                    <div class="card-title">OPEN DAILY</div>
                    <div class="card-text">Fajr to Isha — Urs held annually</div>
                </div>
            </div>

            <div class="info-card">
                <i class="fa-solid fa-phone"></i>
                <div class="info-card-content">
                    <div class="card-title">PHONE</div>
                    <div class="card-text">+92 300 0000000</div>
                </div>
            </div>

            <div class="info-card">
                <i class="fa-regular fa-envelope"></i>
                <div class="info-card-content">
                    <div class="card-title">EMAIL</div>
                    <div class="card-text">info@sultanabdulhakim.org</div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="form-box">
            <h3>SEND A MESSAGE</h3>
            <form action="#">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Your message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">SUBMIT</button>
            </form>
        </div>
    </div>
@endsection