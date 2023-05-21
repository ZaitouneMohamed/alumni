<!-- Modal -->
<div class="modal fade" id="registerForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="container">
                    <div class="content">
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            @method('post')
                            <div class="user-details">
                                <div class="input-box">
                                    <span class="details">Nom</span>
                                    <input type="text" name="nom" placeholder="Enter your name" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Prenom</span>
                                    <input type="text" name="prenom" placeholder="Enter your username" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Email</span>
                                    <input type="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Numero Telephone</span>
                                    <input type="text" name="phone" placeholder="Enter your number" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">Password</span>
                                    <input type="password" name="password" placeholder="Enter your password" required>
                                </div>
                                <div class="input-box">
                                    <span class="details">votre role</span>
                                    <select x-model="role" name="role">
                                        <option value="etudiant">etudiant</option>
                                        <option value="encien">encien</option>
                                        <option value="recruteur">recruteur</option>
                                    </select>
                                </div>

                                <div class="input-box" x-show="role==='encien'">
                                    <span class="details">salair</span>
                                    <input type="text" name="salaire" placeholder="entre salire">
                                </div>
                                <div class="input-box" x-show="role==='recruteur'">
                                    <span class="details">Nom entreprise</span>
                                    <input type="text" name="company_name" placeholder="entre salire">
                                </div>
                                <div class="input-box" x-show="role==='etudiant'">
                                    <span class="details">fillier</span>
                                    <input type="text" placeholder="fillier" name="fillier">
                                </div>
                                <div class="input-box" x-data="{color:''}">
                                    <span class="details">votre payer</span>
                                    <select name="paye">
                                        <option value="casablanca">Casablanca</option>
                                        <option value="rabat">Rabat</option>
                                        <option value="france">France</option>
                                    </select>
                                </div>
                            </div>
                            <div class="button">
                                <input type="submit" value="register" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<style>
    .container .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    .content form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }

    form .input-box span.details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }

    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
        border-color: #9b59b6;
    }

    form .gender-details .gender-title {
        font-size: 20px;
        font-weight: 500;
    }

    form .category {
        display: flex;
        width: 80%;
        margin: 14px 0;
        justify-content: space-between;
    }

    form .category label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    form .category label .dot {
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
    }

    #dot-1:checked~.category label .one,
    #dot-2:checked~.category label .two,
    #dot-3:checked~.category label .three {
        background: #9b59b6;
        border-color: #d9d9d9;
    }

    form input[type="radio"] {
        display: none;
    }

    form .button {
        height: 45px;
        margin: 35px 0
    }

    form .button input {
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    form .button input:hover {
        /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #71b7e6, #9b59b6);
    }

    @media(max-width: 584px) {
        .container {
            max-width: 100%;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }

        form .category {
            width: 100%;
        }

        .content form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }

        .user-details::-webkit-scrollbar {
            width: 5px;
        }
    }

    @media(max-width: 459px) {
        .container .content .category {
            flex-direction: column;
        }
    }
</style>
