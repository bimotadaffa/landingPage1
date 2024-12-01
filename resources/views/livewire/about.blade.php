@extends('layouts.app')

@section('content')
<div class="container">
    <div class="about-section">
        <h1>About Us Page</h1>
        <p>Some text about who we are and what we do.</p>
        <p>Resize the browser window to see that this page is responsive by the way.</p>
        
    </div>
        
    <h2 class="text-center">Our Team</h2>
    <div class="row" x-data="{halo: $wire.$entangle('halo')}">
        <div class="column">
            <div class="card">
                <img src="/w3images/team1.jpg" alt="Jane" class="card-img">
                <div class="container">
                    <h2>Jane Doe</h2>
                    <p class="title">CEO & Founder</p>
                    <p><span x-text="halo"></span>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>jane@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
        
        <div class="column">
            <div class="card">
                <img src="/w3images/team2.jpg" alt="Mike" class="card-img">
                <div class="container">
                    <h2>Mike Ross</h2>
                    <p class="title">Art Director</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>mike@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
        
        <div class="column">
            <div class="card">
                <img src="/w3images/team3.jpg" alt="John" class="card-img">
                <div class="container">
                    <h2>John Doe</h2>
                    <p class="title">Designer</p>
                    <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                    <p>john@example.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.container {
    padding: 0 16px;
}

.about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
}

.text-center {
    text-align: center;
}

.row {
    overflow: hidden;
}

.column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
}

.card-img {
    width: 100%;
}

.title {
    color: grey;
}

.button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
}
</style>
@endsection