<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome CDN  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <script src ="js/script.js"></script>

    <title>Kontak Hiliah Firda</title>

</head>
  <div class="container">
    <!--=============== NAVIGATION MENU ===============-->

    <div class="menu">
        <a href="/" class="menu-icon fas fa-home"></a>
        <a href="/about" class="menu-icon fas fa-user"></a>
      <a href="/projek" class="menu-icon fas fa-code"></a>
        <a href="/kontak" class="menu-icon fas fa-id-card"></a>
    </div>
  <div class="portfolio">
<div class = "content">
<div class = "box">
<section class="content-card contact" id="/kontak">
                <h1>Message</h1>
                <form method='post' action="{{route('validate')}}" class="form" id="form" >
                  @csrf
                  @if ($errors -> any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

                  @error('name')
                      <div class="error_msg">
                          <p class="text_xsm fc_red">
                              {{ $message }}
                          </p>
                      </div>
                  @enderror
                    <div class="input-box">
                        <input type="text" class="text-input" name="name" placeholder="Name" />
                    </div>
                  

                  @error('email')
                          <div class="error_msg">
                              <p class="text_xsm fc_red">
                                  {{ $message }}
                              </p>
                          </div>
                      @enderror
                    <div class="input-box">
                        <input type="email" class="text-input" name="email" id="email" placeholder="Email" />
                    </div>
                  

                  @error('subject')
                      <div class="error_msg">
                          <p class="text_xsm fc_red">
                              {{ $message }}
                          </p>
                      </div>
                  @enderror
                    <div class="input-box">
                        <input type="subject" class="text-input" name="subject" id="subject"
                            placeholder="Subject" />
                    </div>
                    

                  @error('message')
                      <div class="error_msg">
                          <p class="text_xsm fc_red">
                              {{ $message }}
                          </p>
                      </div>
                  @enderror
                    <div class="input-box">
                        <textarea name="text" class="message" placeholder="Message..."></textarea>
                    </div>
                  
                  
                    <div class="input-box">
                        <input type="submit" class="submit-btn" id="submit" value="submit" />
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</div>