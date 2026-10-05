@extends('layouts.app')

@section('content')
    <!-- Header Section -->
    <div class="hero-banner">
        <h1>LIBRARY</h1>
    </div>

    <!-- Library Content Section -->
    <div class="library-section">
        <h2 class="section-title">BOOKS & PUBLICATIONS</h2>
        <div class="divider"></div>
        <p class="subtitle">Available at the darbar bookstall on request.</p>

        <!-- 2x2 Cards Grid -->
        <div class="books-grid">
            <div class="book-card">
                <div class="book-title">MALFUZAT SHARIF</div>
                <div class="book-description">Collected sayings and counsel recorded by devotees.</div>
            </div>

            <div class="book-card">
                <div class="book-title">ANWAR-UL-QULUB</div>
                <div class="book-description">Notes on purification of the heart and daily zikr.</div>
            </div>

            <div class="book-card">
                <div class="book-title">SEERAT HIGHLIGHTS</div>
                <div class="book-description">Lessons from the life of the Holy Prophet ﷺ.</div>
            </div>

            <div class="book-card">
                <div class="book-title">URS COMPENDIUM</div>
                <div class="book-description">History and programme of the annual urs gatherings.</div>
            </div>
        </div>
    </div>
@endsection