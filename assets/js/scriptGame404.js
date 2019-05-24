$(function() {
    var anim_id;

    //saving dom objects to variables
    var container = $('#containerGame');
    var motocicle = $('#motocicle');
    var obs1 = $('#obs1');
    var obs2 = $('#obs2');
    var obs3 = $('#obs3');
    var arena = $('#arena404');

    var trash1 = $('#trash1');
    var trash2 = $('#trash2');
    var trash3 = $('#trash3');
    var trash4 = $('#trash4');
    var trash5 = $('#trash5');
    var trash6 = $('#trash6');
    var trash7 = $('#trash7');
    var trash8 = $('#trash8');
    // var restart_div = $('#restart_div');
    //var restart_btn = $('#restart');
    //var score = $('#score');

    //saving some initial setup
    //var container_left = parseInt(container.css('left'));
    var container_width = parseInt(container.width());
    var container_height = parseInt(container.height());

    var motocicle_width = parseInt(motocicle.width());
    var motocicle_height = parseInt(motocicle.height());

    //some other declarations
    var game_over = false;

    var score_counter = 1;

    var speed = 10;
    var line_speed = 5;

    var move_up = false;
    var move_down = false;

    var init_game = 0;

    /* ------------------------------GAME CODE STARTS HERE------------------------------------------- */
    /* Move the cars */
    function game() {
        up();
        if (init_game == 0) {
            //startGame
            init_game = 1;
            repeat();
        }

        if (game_over === true) {
            speed = 10;
            game_over = false;
            up();
            var num1, num2, num3;
            if ($(window).width() < 500) {
                num1 = 210;
                num2 = 714;
                num3 = 1200;
            }
            if ($(window).width() > 500) {
                num1 = 1200;
                num2 = 1900;
                num3 = 2500;
            }
            obs1.css('left', num1 + 'px');
            obs2.css('left', num2 + 'px');
            obs3.css('left', num3 + 'px');
            repeat();

        }
    }
    arena.click(function() {
        game();
    });

    $(document).on('keydown', function(e) {

        var key = e.keyCode;
        if (key === 32 && move_up === false) {
            game();
        }

    });

    //subir 270, bajar 180
    function up() {

        if (game_over === false && parseInt(motocicle.css('top')) >= 0) {
            motocicle.stop().animate({
                bottom: '+=140px'
            }, 300, 'linear', function() {
                birdPos(250);
            });
        }
    }

    function birdPos(cont) {
        motocicle.stop().animate({
            bottom: '-=140px'
        }, cont, 'linear', function() {});
    }

    function stop_the_game() {
        game_over = true;
    }

    function prueba($div1, $div2) {
        //console.log(Math.round($div2.position().top));
        if (Math.round($div2.position().left) <= (Math.round($div1.position().left) + 70) && (Math.round($div2.position().left) + 33) >= Math.round($div1.position().left) && Math.round($div1.position().top) == (Math.round($div2.position().top))) {
            return true;
        }

    }

    function repeat() {
        if (game_over === false) {
            //prueba(motocicle, obs1)
            if (prueba(motocicle, obs1) || prueba(motocicle, obs2) || prueba(motocicle, obs3)) {
                console.log("eafe");
                stop_the_game();
            }

            score_counter++;

            if (score_counter % 20 == 0) {
                //score.text(parseInt(score.text()) + 1);
            }
            if (score_counter % 500 == 0) {
                speed++;
                line_speed++;
            }

            obs_move(obs1);
            obs_move(obs2);
            obs_move(obs3);

            obs_move(trash1);
            obs_move(trash2);
            obs_move(trash3);
            obs_move(trash4);
            obs_move(trash5);
            obs_move(trash6);
            obs_move(trash7);
            obs_move(trash8);

            anim_id = requestAnimationFrame(repeat);
        }
    }

    function obs_move(obst) {
        var obs_move = parseInt(obst.css('left'));
        //console.log(car_current_top);
        if (obs_move < 0) { //Movil 2500 - 2000
            var random = Math.floor(Math.random() * 2000) + 1500;
            obs_move = container_width + random;
        }
        obst.css('left', obs_move - speed);
    }

    function trash_run(trash) {
        var trash_move = parseInt(trash.css('left'));
        if (trash_move < -10) {
            trash_move = container_width;
        }
        trash.css('left', trash_move - speed);
    }
    /* ------------------------------GAME CODE ENDS HERE--------------------------------------------- */

    //animation
    //$("#arena404").slideDown("slow");
    $("#animationText").slideDown(300);


});