
<style>
    @import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
    * {
        box-sizing: border-box;
    }

    .container {
        display: flex;
        /*width: 1040px;*/
        justify-content: space-evenly;
        flex-wrap: wrap;
    }
    .card {
        margin: 10px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        width: 300px;
    }
    .card-header img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }
    .card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 20px;
        min-height: 250px;
    }

    .tag {
        background: #cccccc;
        border-radius: 50px;
        font-size: 12px;
        margin: 0;
        color: #fff;
        padding: 2px 10px;
        text-transform: uppercase;
        cursor: pointer;
    }
    .tag-teal {
        background-color: #47bcd4;
    }
    .tag-purple {
        background-color: #5e76bf;
    }
    .tag-pink {
        background-color: #cd5b9f;
    }

    .card-body p {
        font-size: 13px;
        margin: 0 0 40px;
    }
    .user {
        display: flex;
        margin-top: auto;
    }

    .user img {
        border-radius: 50%;
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }
    .user-info h5 {
        margin: 0;
    }
    .user-info small {
        color: #545d7a;
    }
</style>





        <div id="gallery" class="py-4 py-lg-6" >
          <div class="container">
                        <div class="text-center mb-6 mb-0">
                            <h2 class="h1 font-weight-bold mb-3 text-dark op-9 text-green-bright">
                                A picture is a thousand words
                            </h2>
                            <p class="text-dark op-7">
                                Take a tour of our gallery below
                                <br> Schedule an appointment to visit one that matches your requirement
                            </p>
                        </div>
                  </div>
                  <div class="container">
                        <div class="card">
                            <div class="card-header">
                              <img src="https://images.unsplash.com/photo-1595222016771-1843541fa718?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1053&q=80" alt="rover" />
                            </div>
                            <div class="card-body">
                              <span class="tag tag-teal">Tamarin</span>
                              <h4>
                              3bedroom Aparment in flic, with 3 baths
                              </h4>
                              <p>
                              design  An exploration into the truck's polarising design  An exploration into the truck's polarising design  An exploration into the truck's polarising design
                              </p>
                              <div class="user">

                                <div class="user-info">
                                  <h5>July Dec</h5>
                                  <small>2h ago</small>
                                </div>
                              </div>
                            </div>
                        </div>
                          <div class="card">
                            <div class="card-header">
                              <img src="https://images.unsplash.com/photo-1628745277895-106fbff3caf7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" alt="ballons" />
                            </div>
                            <div class="card-body">
                              <span class="tag tag-purple">Flic en flac</span>
                              <h4>
                              2bedroom Aparment in flic, with private pool
                              </h4>
                              <p>
                                The future can be scary, but there are ways to
                                deal with that fear.The future can be scary, but there are ways to
                                deal with that fear.
                              </p>
                              <div class="user">

                                <div class="user-info">
                                  <h5>Eyup Ucmaz</h5>
                                  <small>Yesterday</small>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header">
                              <img src="https://images.unsplash.com/photo-1437751695201-298be97a82a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1136&q=80" alt="city" />
                            </div>
                            <div class="card-body">
                              <span class="tag tag-pink">Flic en flac</span>
                              <h4>
                              1 bedroom Studio, Modern
                              </h4>
                              <p>
                                Dashboard Design Guidelines     Dashboard Design Guidelines     Dashboard Design Guidelines     Dashboard Design Guidelines    Dashboard Design Guidelines
                              </p>
                              <div class="user">

                                <div class="user-info">
                                  <h5>25000</h5>
                                  <small>1w ago</small>
                                </div>
                              </div>
                            </div>
                          </div>


                    </div>

            </div>




