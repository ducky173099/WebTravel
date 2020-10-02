<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./css/parallaxScrollBanner.css"> -->
    <!-- <link rel="stylesheet" href="./css/according.css"> -->
    <link rel="stylesheet" href="./css/wavyEffect.css">
</head>
<body>
    <!-- <section class="zoom">
        <img src="images/mountain1.png" alt="" id="layer1">
        <img src="images/mountain2.png" alt="" id="layer2">
        <img src="images/text.png" alt="" id="text">
    </section>
    <section class="content">
        <h2>Simple Background Parallax Using JS</h2>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
        </p>
    </section> -->

    <!-- <div class="accordion">
        <div class="contenBx">
            <div class="label">List one</div>
            <div class="contentAcc">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries</p>
            </div>
        </div>
        <div class="contenBx">
            <div class="label">List two</div>
            <div class="contentAcc">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries</p>
            </div>
        </div>
        <div class="contenBx">
            <div class="label">List three</div>
            <div class="contentAcc">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries</p>
            </div>
        </div>
        <div class="contenBx">
            <div class="label">List four</div>
            <div class="contentAcc">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries</p>
            </div>
        </div>
    </div> -->
    <div class="mainWavy">
        <div class="container wavy">
            <div class="boxWavy">
                <div class="contentWavy">
                    <h2>Water wave div</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard</p>
                </div>
            </div>
            <div class="boxWavy">
                <div class="contentWavy">
                    <h2>Water wave div</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard</p>
                </div>
            </div>
            <div class="boxWavy">
                <div class="contentWavy">
                    <h2>Water wave div</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard</p>
                </div>
            </div>
        </div>
        <svg>
            <filter id="wavyFilter">
                <feTurbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="2">
                    <animate attributeName="baseFrequency" dur="60s" values="0.02;0.05;0.02" repeatCount="indefinite"/>
                </feTurbulence>
                <feDisplacementMap in="SourceGraphic" scale="30"/>
            </filter>
        </svg>
    </div>

 
    <script type="text/javascript">
        const accordion = document.getElementsByClassName('contenBx');

        for(i = 0; i < accordion.length; i++){
            accordion[i].addEventListener('click', function(){
                this.classList.toggle('active')
            })
        }
    </script>
</body>
</html>
