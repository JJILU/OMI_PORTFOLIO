<x-layout>


  {{-- VALIDATION ERRORS --}}
  {{-- @if($errors->any())
    <div class="bg-red-200 text-red-800 text-center py-3">
      <ul class="mb-0">
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif --}}

  <main class="main">

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Feel free to send me a message anytime</p>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <!-- LEFT SIDE -->
          <div class="col-lg-5">
            <div class="info-wrap">

              <div class="info-item d-flex">
                <i class="bi bi-geo-alt"></i>
                <div>
                  <h3>Address</h3>
                  <p>Lusaka, Zambia</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-telephone"></i>
                <div>
                  <h3>Call Me</h3>
                  <p>+260 977583629/767660569</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-envelope"></i>
                <div>
                  <h3>Email</h3>
                  <p>walu9963@gmail.com</p>
                </div>
              </div>

            </div>
          </div>

          <!-- RIGHT SIDE (FORM) -->
          <div class="col-lg-7">

            <form action="{{ route('email.contact') }}" method="POST">
              @csrf

              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text"
                         name="name"
                         id="name"
                         value="{{ old('name') }}"
                         class="form-control">
                </div>

                <div class="col-md-6">
                  <label for="email">Your Email</label>
                  <input type="email"
                         name="email"
                         id="email"
                         value="{{ old('email') }}"
                         class="form-control">
                </div>

                <div class="col-md-12">
                  <label for="subject">Subject</label>
                  <input type="text"
                         name="subject"
                         id="subject"
                         value="{{ old('subject') }}"
                         class="form-control">
                </div>

                <div class="col-md-12">
                  <label for="message">Message</label>
                  <textarea name="message"
                            id="message"
                            rows="6"
                            class="form-control">{{ old('message') }}</textarea>
                </div>

                <div class="col-md-12 text-center" >
                  <button type="submit" class="btn btn-primary" style="background-color:  #34b7a7; border:0; width:100%; padding: 15px">
                    Send Message
                  </button>
                </div>

              </div>

              {{-- Validation Errors --}}
              @if ($errors->any())
                 <div>
                  <ul style="padding: 10px; margin:7px; background-color: #d5c2c2;text-decoration:none; text-align:center;list-style: none">
                    @foreach ($errors->all() as $error )
                      <li style="color:#ab1717; margin-top: 5px; font-weight: bold">{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>   
              @endif

            </form>

          </div>

        </div>

      </div>

    </section>

  </main>

</x-layout>