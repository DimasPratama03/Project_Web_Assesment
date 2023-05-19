@extends('pages.master')
    <body class="formtes">
    @include('pages.navbar')
    <section class="section" id="about">
        <div class="container">
            <h1>Big Five Personality Test</h1>
  <form>
    <h2>Question 1:</h2>
    <b>I am someone who is:</b>
    <label>
      <input type="radio" name="question1" value="1">
      Ya
    </label>
    <label>
      <input type="radio" name="question1" value="2">
      Tidak
    </label>

    <h2>Question 2:</h2>
    <b>I am someone who is:</b>
    <label>
      <input type="radio" name="question1" value="1">
      Ya
    </label>
    <label>
      <input type="radio" name="question1" value="2">
      Tidak
    </label>

    <h2>Question 3:</h2>
    <b>I am someone who is:</b>
    <label>
      <input type="radio" name="question1" value="1">
      Ya
    </label>
    <label>
      <input type="radio" name="question1" value="2">
      Tidak
    </label>

    <h2>Question 4:</h2>
    <b>I am someone who is:</b>
    <label>
      <input type="radio" name="question1" value="1">
      Ya
    </label>
    <label>
      <input type="radio" name="question1" value="2">
      Tidak
    </label>

    <h2>Question 5:</h2>
    <b>I am someone who is:</b>
    <label>
      <input type="radio" name="question1" value="1">
      Ya
    </label>
    <label>
      <input type="radio" name="question1" value="2">
      Tidak
    </label>

    

    <!-- Repeat the above structure for other questions -->

    <div class="button-container">
      <button class="back-button">Kembali</button>
      <button class="next-button">Lanjut</button>
    </div>
    
    
    
  </form>
        </div>
    </section>
    </body>