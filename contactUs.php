<?php
?>
<section >
    <main class="page-container">
        <form action="" method="POST">
            <div class="form">
                <div class="form-heading">
                    <h2>Heading of the form</h2>
                    <p>Some paragraph if you want.</p>
                </div>
                <div class="form-element-wrapper">
                    <div class="form-elements">
                        <label for="name">Label Name:</label>
                        <input type="text" id="name" name="name" placeholder="Name of the field">
                    </div>

                    <div class="form-elements">
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-element-wrapper">
                    <div class="form-elements">
                        <label for="title">DropDown Label:</label>
                        <select id="title" name="title">
                            <option value="" selected>value-1</option>
                            <option value="">value2</option>
                            <option value="">value3</option>
                            <option value="">value4</option>
                        </select>
                    </div>
                </div>
                <fieldset class="individual-element">
                    <legend>Name</legend>
                    <input type="radio" id="" name="radio1" value="" checked>
                    <label for="">Value1</label>
                    <input type="radio" id="html" name="radio1" value="">
                    <label for="">Value2</label>
                </fieldset>
                <fieldset class="individual-element">
                    <legend>Name</legend>
                    <input type="checkbox" id="" name="checkbox1" value="" checked>
                    <label for="">Value1</label>
                    <input type="checkbox" id="" name="checkbox1" value="html">
                    <label for="">Value1</label>
                </fieldset>
                <div class="individual-element">
                    <label for="">Text Area</label>
                    <textarea name="" id="" rows="4">Text Content Here.
                    </textarea>
                </div>
                <div class="individual-element">
                    <input type="checkbox" id="iAgree" name="iAgree" value="Aggrement">
                    <label for="iAgree">I agree to <a href="#"> terms and conditions </a>
                        of your
                        comapny.</label>
                </div>
                <div class="submit-section">
                    <button class="submit-Button" type="submit" id="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
    <div>
        
    </div>

    </main>
</section>
