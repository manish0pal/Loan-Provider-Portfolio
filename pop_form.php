<div class="pop-div" id="pop-Form">

        <div class="sub-title">Apply For Loan<i class="fa fa-close pull-right m-1" onclick="closeForm()"></i></div>

        <form action="insert_afl.php" method="POST">
            <div class="fields">

                <div class="pop-input"><input type="name"   name="name" class="user-input" placeholder="Name" required /></div>
                <div class="pop-input"><input type="email"  name="email" class="user-input" placeholder="Email" required /></div>
                <div class="pop-input"><input type="text"   name="city" class="user-input" placeholder="City" required /></div>
                <div class="pop-input"><input type="number" name="phone" class="user-input" placeholder="Phone no." required /></div>
                <div class="pop-input"><input type="number" name="amount" class="user-input" placeholder="Amount" min="0" required />

                </div>
					

                <div class="pop-input">

                    <select class="user-input" name="loan_type" required="required">

                        <option value="" disabled="" selected="">Select Your Loan</option>

                        <option value="Personal Loan">Personal Loan</option>

                        <option value="Business Loan">Business Loan</option>

                        <option value="Home Loan">Home Loan</option>

                        <option value="Loan against property">Loan against property</option>

                    </select>

                </div>



            </div>

            <button type="submit" class="pop-button">Submit</button>

        </form>

    </div>

<button class="open-button" id="opn-btn" onclick="openForm()">Apply For A Loan</button>

    <script>

        function openForm() {

            document.getElementById("pop-Form").style.display = "block";

            document.getElementById("opn-btn").style.display = "none";



        }



        function closeForm() {

            document.getElementById("pop-Form").style.display = "none";

            document.getElementById("opn-btn").style.display = "inline-block";

        }

    </script>