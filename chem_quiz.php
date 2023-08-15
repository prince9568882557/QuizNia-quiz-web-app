
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chemistry_quiz</title>
    <link rel="stylesheet" href="css/quiz1.css">
    <!-- FontAweome CDN Link for Icons-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
	
</style>
</head>
<body>
    <!-- start Quiz button -->
    <div class="start_btn"><button>Click Here To Start The Quiz</button></div>

    <!-- Info Box -->
    <div class="info_box">
        <div class="info-title"><span>Some Rules of this Quiz</span></div>
        <div class="info-list">
            <div class="info">1. You will have only <span>60 seconds</span> per each question.</div>
            <div class="info">2. Once you select your answer, it can't be undone.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. You can't exit from the Quiz while you're playing.</div>
            <div class="info">5. You'll get points on the basis of your correct answers.</div>
        </div>
        <div class="buttons">
            <button class="quit">Exit Quiz</button>
            <button class="restart">Continue</button>
        </div>
    </div>

    <!-- Quiz Box -->
    <div class="quiz_box">
        <header>
            <div class="title">Biology</div>
            <div class="timer">
                <div class="time_left_txt">Time Left</div>
                <div class="timer_sec">60</div>
            </div>
            <!-- <div class="time_line"></div> -->
        </header>
        <section>
            <div class="que_text">
                <!-- insert question from JavaScript -->
            </div>
            <div class="option_list">
                <!--  insert options from JavaScript -->
            </div>
        </section>

        <!-- footer of Quiz Box -->
        <footer>
            <div class="total_que">
                <!--  insert Question Count Number from JavaScript -->
            </div>
            <button class="next_btn">Next Que</button>
        </footer>
    </div>

    <!-- Result Box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">You've completed the Quiz!</div>
        <div class="score_text">
            <!-- insert Score Result from JavaScript -->
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
        </div>
    </div>

    <!-- Inside this JavaScript file  insert Questions and Options only -->
    <script src="js/chem_question.js"></script>

    <!-- Inside this JavaScript file  coded all Quiz Codes -->
    <script src="js/quiz1.js"></script>

</body>
</html>


