<?php
include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.png" />

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Types</title>
</head>
<body>
 <!-- cursor -->
    <div class="cursor"></div>
    <div class="cursor2"></div>
 <!-- Navigation bar -->
    <div class="nav">
        <p class="logo" >
            <a href="index.php"><img src="logo.png" alt=""></a> 
           </p>
        <nav class="links" >
            <a href="index.php">Home</a>
            <!-- <a href="definition.php">Types</a> -->
            <div class="drp-dwn">
                <div class="active"><button id="nohover" class="drp-btn links"><a href=""> Types</a>
                    <i class="fa fa-caret-down"></i>
                </button></div>
                <div class="drpdwn-options">
                    <a href="#Anxiety">Anxiety</a>
                    <a href="#depression">Depression</a>
                    <a href="#bipolar">Bipolar</a>
                    <a href="#ptsd">PTSD</a>
                    <a href="#adhd">Eating disorder</a>
                    <a href="#autism">Substance Abuse Disorder</a>
                </div>
            </div>
           
           <a href="myths.php">Myths vs Truths</a>
           <a href="support.php">Support</a>
         
        </nav>
    </div>
     <!-- Background images and Typewriter -->
    <div class="wlk">
    <img src="Mh.png" alt="">
        <div class="intro">
            <h1>There </h1>
            <h1 class="typing"></h1>
        </div>
    

    </div>
     <!-- Types content -->
    <div class="part2">
        
        <div id="Anxiety">
            <br><br><br><br>
            <h3>Anxiety</h3>
            <details class="details">
                <summary id="sum1">What is Anxiety?</summary><br>
                <div id="p">
                    <div class = "alignment">
                        <p>According to the Anxiety and Depression Association of America, anxiety disorders are the most common type of mental illness.People with anxiety disorders normally have severe fear or anxiety, which relates to certain objects or situations. Most of these people with such disorders will try to avoid exposure to whatever triggers their anxiety.</p>
                        <p>It is therefore important to note that everyone experiences anxiety from time to time as it is the way our bodies keep us alert. But it becomes an issue when emotions of worry or fear interfere with our day-to-day life.</p>
                    </div>
                    <div id = "align">
                        <p><strong>Common types of anxiety disorders include:</strong></p>
                    </div>
                    <div class = "alignment">
                        <ul>
                        <br><li><strong>Social phobia or social anxiety disorder: </strong>A disorder that causes people to avoid social or performance situations for fear of being embarrassed or rejected. </li>
                        <br><li><strong>Generalised anxiety disorder: </strong> An excessive, uncontrollable worry about a range of ordinary issues which are health, work or finance related. </li>
                        <br><li><strong> Obsessive compulsive disorder (OCD): </strong> these are unwanted thoughts and impulses (obsessions) which cause repetitive, routine behaviours (compulsions) as a way of copying with anxiety. </li>
                        <br> <li> <strong> Agoraphobia: </strong> Avoiding certain situations due to fear of having a panic attack. Agoraphobia is often associated with panic disorder. <a href = "https://www.psychiatry.org/patients-families/anxiety-disorders/what-are-anxiety-disorders"> Find out more about the types of anxiety</a> </li>
                    </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum2">What causes Anxiety Disorder?</summary><br>
                <div id="p">
                    <div class = "alignment">
                    <p> The exact causes of anxiety disorders are unknown. Life experiences such as traumatic events appear to trigger anxiety disorders in people who are already prone to anxiety according to the Mayo Foundation for Medical Education and Research. Inherited traits also can be a factor.In addition, researches believe that a combination of genetic and environmental factors may play a significant role. Brain chemistry is also being studied as a possible cause.</p>
                    <p> Anxiety disorders often occur alongside other mental health conditions, such as depression and substance abuse. Many people try to ease the symptoms of anxiety by using alcohol and other drugs. However, the relief that these substances provide is temporary.<p>
                    </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum3">How can you tell if someone you know might have Anxiety Disorder?</summary><br>
                <div id="p">
                    <p class="alignment" >If someone is experiencing anxiety, constant unnecessary fear, always on the watch feeling nervous and restless tense and not relaxed. Others are increased heart rate and sweating and can’t focus on because of the worry that the person has.</p>
                </div>
            </details>
            <details class="details">
                <summary id="sum4">Signs and Symptoms?</summary><br>
                <div id="p">
                <ul>
                    <strong><br><div class = "align">Worrying Excessively:</div></strong><br>
                    <u><div style = "text-align: left; margin-left: 1.5 em">For worrying to be considered to be a sign of anxiety, it must be:</u></div?>
                        <li style= 'text-align: left; '>Experienced nearly daily for six months at least and be difficult to manage.</li>
                        <li style= 'text-align: left; '>Intrusive and extreme, resulting in difficulty focusing and getting through the day.</li>
                    <strong><br><div class= "align">Agitation:</div></strong><br>
                    <u><div style = "text-align: left; margin-left: 1.5 em">Experiencing agitation results in the following effects throughout the body: </u></div>
                        <li style= 'text-align: left; '>Racing pulse.</li>
                        <li style= 'text-align: left; '>Sweaty palms.</li>
                        <li style= 'text-align: left; '>Shaky hands.</li>
                        <li style= 'text-align: left; '>Dry mouth.</li>
                    <br><li style= 'text-align: left; '>People with anxiety disorder tend to experience these effects for longer periods of time.</li>
                    <strong><br><div class = "align">Irritability</div></strong>
                    <strong><br><div class = "align">Tense Muscles:</div></strong>
                    <li style= 'text-align: left; '>Another symptom is having tension in muscles on most days of the week.</li>
                    <strong><br><div class = "align">Difficulty falling asleep or staying asleep</div></strong>
                    <strong><br><div class = "align">Panic attacks</div></strong>
                    <strong><br><div class = "align">Avoiding social situations:</div></strong>
                    <br><u><div style = "text-align: left; margin-left: 1.5 em">This type of symptom is a sign of social anxiety disorder, which has other signs such as:</u></div>
                        <li style= 'text-align: left; '>Being fearful or feeling anxious about social situations.</li>
                        <li style= 'text-align: left; '>Concerned you might be judged by others.</li>
                        <li style= 'text-align: left; '>Fearing the possibility of being humiliated in front of others.</li>
                        <li style= 'text-align: left; '>Avoiding social situations because of fears.</li>
                    <strong><br><div class = "align">Irrational phobias:</div></strong><br>
                    <u>Common phobias include</u>:
                        <li style= 'text-align: left; '>Animal phobias.</li>
                        <li style= 'text-align: left; '>Natural environment phobias (natural events such as hurricanes or floods).</li>
                        <li style= 'text-align: left; '>Blood-injection-injury phobias.</li>
                        <li style= 'text-align: left; '>Situation phobias (situations such as an airplane or elevator).</li>
                </div>
            </details>
            <details class="details">
                <summary id="sum5">How to Cope</summary><br>
                <div id="p">
                <br><h4><bold> SELF COPING STRATEGIES FOR ANXIETY</bold></h4>
                <ul> <div class ="alignment">
                    <br><strong><div class= "align">Take a moment to focus on your breathing:</strong></div>
                    <li>Controlling your breathing will slow down your heart rate and in turn help you calm down.</li>
                    <li>In some cases, breathing into a paper bag can help you control your breathing when having trouble calming down.</li>
                    <br><strong><div class= "align">Go for a walk, stretch or exercise:</strong></div>
                    <li>This refocuses your attention on your body movements, distracting you from your negative thoughts and - according to Ryan Collins - during physical activity endorphins are released which are a type of neurotransmitter that helps relieve pain as well as stress. Other important brain chemicals are released during physical activity too which are crucial to the regulation of your emotions.</li>
                    <br><strong><div class= "align">Redirect your focus:</strong></div>
                    <li>Listen to music, spend time focusing on an enjoyable hobby, read a book or watch something relaxing, pray or meditate to distract you from your anxiety and in turn calm yourself. </li>
                    <br><strong><div class= "align">Monitor/maintain your physical and mental health:</strong></div>
                    <li>Get enough sleep, engage in physical activities regularly, take breaks or a time off from things that could induce your anxiety symptoms every now and then, eat healthy meals and spend time with people who make you feel good/better and care about you.</li>
                    <br><strong><div class= "align">Limit your exposure to your triggers:</strong></div>
                    <li>Triggers can range from substances like alcohol or caffeine to long-term issues like a relationship, a person or a situation - at work, home or elsewhere. </li>
                    <li>Ensure that once you’ve identified your triggers, you limit your exposure to them if possible. If not possible, use coping techniques that can help you endure the situation currently (the other techniques mentioned).</li>
                </div>
                </ul>
                </div>
            </details>
        </div>
        <div id="depression">
            <br><br><br><br>
            <h3>Depression</h3>
            <details class="details">
                <summary id="sum1">What is Depression?</summary><br>
                <div id="p">
                <div class= "alignment">
                    <p>Depression is a common mental disorder and one of the main causes of disability worldwide. According to the Global Burden of Disease Study (2017), an estimated 264 million people are affected by depression globally as more women are affected than men.</p> 
                    <p>Depression is characterised by sadness, loss of interest or pleasure, feelings of guilt and poor concentration. People with depression may also have multiple complaints with no apparent physical cause. It can be long-lasting or recurrent, substantially impairing people’s ability to function and to cope with daily life. At its most severe, depression can lead to suicide. </p>
                    <p><strong><div class = "align">The following are the types of depression:</div></strong></p>
                    <br> A depressive episode can be categorised as mild, moderate or severe depending on the number and severity of symptoms. Moreover, there is a key distinction between depression in people who have or don't have a history of manic epsiodes but both types can be chronic. 
                    <p> <strong> Recurrent depressive disorder:</strong> this type of disorder involves repeated depressive episodes whereby one can experience depressed mood, loss of interest and enjoyment, and reduced energy leading to diminished activity for at least two weeks.<p>
                    <p><strong> Bipolar affective disorder:</strong> this type of depression typically consists of both manic and depressive episodes separated by periods of normal mood. Manic episodes involve elevated or irritable mood, over-activity, pressure of speech, inflated self-esteem and a decreased need for sleep</p>
                </div>
            </details>
            <details class="details">
                <summary id="sum2">What causes Depression?</summary><br>
                <div id="p">
                    <div class = "alignment">
                        <p>There are several possible causes of depression and range from biological to circumstantial</p>
                    </div>
                    <br><strong>The common causes include:</strong>
                    <div class ="alignment">
                        <ul>
                            <br><li><strong>Early childhood trauma:</strong> Some of the events affect the way one's body reacts to fear and stressful situations.</li>
                            <br><li><strong>Brain structure:</strong> There's a greater risk for depression if the frontal lobe of one's brain is less active. However, scientists do not know if this happens before or after the onset of depressive symptoms.</li>
                            <br><li><strong> Medical conditions:</strong> Certain conditions may put a person at higher risk, such as chronic illness, insomnia, chronic pain, or attention-deficit hyperactivity disorder (ADHD).</li>
                            <br><li><strong>Drug use:</strong> A history of drug or alcohol misuse can affect one's risk. About 21% of people who have a substance use problem also experience depression.</li>
                        </ul>
                        <p>In addition to these causes, other risk factors for depression include:</p>
                    </div>
                    <div class = "alignment">
                        <ul>
                            <li> low self-esteem or being self-critical</li>
                            <li> personal history of mental illness</li>
                            <li>certain medications</li>
                            <li>stressful events, such as the loss of a loved one</li>
                        <ul>
                    </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum3">How can you tell if someone you know might have Depression?</summary><br>
                <div id="p">
                    <p class="alignment">	If someone is experiencing depression, there are a lot of things that are an indication of whether someone is depressed or not. <br><br>
                     Once a person starts talking negatively about something that most people find good that person might be undergoing depression,  <br><br>
                       Other people you can tell by their music preference that they are undergoing certain emotions so if a person prefers sad song or music than others then that person must be depressed. <br><br> There are many indications or symptoms of depression, if you are experiencing depression you’ll see yourself feeling sad every time, most of the time having bad dreams, having dark thoughts like killing yourself and others. There are a lot of things but these are one of them that are an indication of depression.</p>
                </div>
            </details>
            <details class="details">
                <summary id="sum4">Signs and Symptoms?</summary><br>
                <div id="p">
                <ul>
                    <strong><br><div class = "align">Hopeless/helpless outlook on life in general:</div></strong><br>
                    <u><div class = "alignment">Other feelings that could be a sign include: </u></div>
                        <li style= 'text-align: left; '>Worthlessness.</li>
                        <li style= 'text-align: left; '>Inappropriate guilt.</li>
                        <li style= 'text-align: left; '>Self-hate.</li>
                    <strong><br><div class= "align">Common thoughts that recur:</div></strong><br>
                    <li style= 'text-align: left; '>“What’s the point?”</li>
                    <li style= 'text-align: left; '>“It’s my fault.”</li>
                    <strong><br><div class= "align">Lost interest in things that used to excite you:</div></strong><br>
                    <u><div class = "alignment">Losing interest in things such as:</u> </div>
                        <li style= 'text-align: left; '>Hobbies.</li>
                        <li style= 'text-align: left; '>Spending time with friends/family.</li>
                        <li style= 'text-align: left; '>Sports.</li>
                        <li style= 'text-align: left; '>Sex.</li>
                    <strong><br><div class = "align">Fatigue and problems with sleep:</div></strong>
                    <li style= 'text-align: left; '>Lack of energy and feeling fatigued often comes with having depression.</li>
                    <li style= 'text-align: left; '>Insomnia can also be linked to depression as one may lead to the other and vice versa.</li>
                    <strong><br><div class = "align">Anxiety:</div></strong>
                    <li style= 'text-align: left; '>Often, anxiety and depression coexist.</li>
                    <strong><br><div class = "align">Irritability (especially in men who have depression)</div></strong>
                    <strong><br><div class = "align">Fluctuating appetite and weight</div></strong>
                    <strong><br><div class = "align">Uncontrollable emotions:</div></strong>
                    <br><u>Experiencing uncontrollable changes in emotions and having mood swings though no external situation has encouraged the emotions, for instance</u>:
                        <li style= 'text-align: left; '>Outbursts of anger.</li>
                        <li style= 'text-align: left; '>Crying uncontrollably.</li>
                    <strong><br><div class = "align">Being fixated on death:</div></strong><br>
                    <li style= 'text-align: left; '>Often, suicide is linked to depression.</li>
                    <u>It is very important to act and seek help if you notice suicidal symptoms that put someone at urgent risk of self-harm</u>:
                        <li style= 'text-align: left; '>Call the police (10111) or your local emergency number.</li>
                        <li style= 'text-align: left; '>Don’t leave the person alone until help arrives.</li>
                        <li style= 'text-align: left; '>Listen and don’t be judgemental or show panic. Remain as calm as possible.</li>
                        <li style= 'text-align: left; '>Remove any harmful items that can/might cause any harm:</li>
                        <li style= 'text-align: left; '>If you think that someone is considering committing suicide, try calling: </li>
                </ul>
                </div>
            </details>
            <details class="details">
                <summary id="sum5">How to Cope</summary><br>
                <div id="p">
                <br><strong><h4> SELF COPING STRATEGIES FOR DEPRESSION</h4></strong>
                <div class = "alignment">
                    <ul>
                    <br><strong><div class= "align">Take a moment to focus on your breathing:</strong></div>
                    <li>Controlling your breathing will slow down your heart rate and in turn help you calm down.</li>
                    <li>In some cases, breathing into a paper bag can help you control your breathing when having trouble calming down.</li>
                    <br><strong><div class= "align">Go for a walk, stretch or exercise:</strong></div>
                    <li>This refocuses your attention on your body movements, distracting you from your negative thoughts and - according to Ryan Collins - during physical activity endorphins are released which are a type of neurotransmitter that helps relieve pain as well as stress. Other important brain chemicals are released during physical activity too which are crucial to the regulation of your emotions.</li>
                    <br><strong><div class= "align">Redirect your focus:</strong></div>
                    <li>Listen to music, spend time focusing on an enjoyable hobby, read a book or watch something relaxing, pray or meditate to distract you from your anxiety and in turn calm yourself. </li>
                    </br><strong><div class= "align">Monitor/maintain your physical and mental health:</strong></div>
                    <li>Get enough sleep, engage in physical activities regularly, take breaks or a time off from things that could induce your anxiety symptoms every now and then, eat healthy meals and spend time with people who make you feel good/better and care about you.</li>
                    <br><strong><div class= "align">Limit your exposure to your triggers:</strong></div>
                    <li>Triggers can range from substances like alcohol or caffeine to long-term issues like a relationship, a person or a situation - at work, home or elsewhere. </li>
                    <li>Ensure that once you’ve identified your triggers, you limit your exposure to them if possible. If not possible, use coping techniques that can help you endure the situation currently (the other techniques mentioned).</li>
                    </ul>
                </div>
                <p><strong><div class = "align">Other Copying strategies</div></strong>
                <div class = "alignment">
                    <p>Prevention programmes have been shown to reduce depression, both for children protection and psychological support.</p>
                    <p>Therapies: also, an effective treatment. Mild to moderate depression can be effectively treated with talking therapies such as cognitive behaviour therapy or psychotherapy.</p>
                    <p>Antidepressants can be an effective form of treatment for moderate to severe depression but are not the first line of treatment for cases of mild depression. They should not be used for treating depression in children and are not the first line of treatment in adolescents, among whom they should be used with caution.</p> 
                    <p>Therefore, management of depression should include psychosocial aspects, including identifying stress factors. These include financial problems, difficulties at work or physical or mental abuse, and sources of support, such as family members and friends. The maintenance or reactivation of social networks and social activities is important.</p>
                </div>
                </div>
            </details>
        </div>
        <div id="bipolar">
            <br><br><br><br>
            <h3>Bipolar</h3>
            <details class="details">
                <summary id="sum1">What is Bipolar?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <p>This type of mental disorder affects about 45 million worldwide according to the Global Burden of Disease Study (2017). It typically consists of both manic and depressive episodes separated by periods of normal mood. Manic episodes involve elevated or irritable mood, over-activity, rapid speech, inflated self-esteem and a decreased need for sleep. People who have manic attacks but do not experience depressive episodes are also classified as having bipolar disorder.</p> 
                    <p> Biploar disorder is a category that includes three different diagnoses which are:<strong> bipolar 1, biploar 11 and cyclothymic disorder</strong>.</p> 
                    <br><strong> Bipolar 1 Disorder: </strong> is a type of disorder diagnosed when a person experiences a manic episode.During a manic episode, people with bipolar I disorder experience an extreme increase in energy and may feel on top of the world or uncomfortably irritable in mood. Some people with bipolar I disorder also experience depressive or hypomanic episodes, and most people with bipolar I disorder also have periods of neutral mood. </p>
                    <br> <strong> Bipolar 11 Disorder: </strong> requires someone to have at least one major depressive episode and at least one hypomanic episode. People return to their usual functioning between episodes. People with bipolar II disorder often first seek treatment as a result of their first depressive episode, since hypomanic episodes often feel pleasurable and can even increase performance at work or school.
                    <p> People with bipolar II disorder frequently have other mental illnesses such as an anxiety disorder or substance use disorder, the latter of which can exacerbate symptoms of depression or hypomania. </p> 
                    <br> <strong> Cyclothymic disorder: </strong> is a disorder which is a milder form of bipolar involving many "mood swings", with hypomania and depressive symptoms that occur frequently. People with cyclothymia experience emotional ups and downs but with less severe symptoms than bipolar1 or 11 disorder.
                </div>
                <p><strong>Management of bipolar depression</strong></p>
                <div class = "alignment">
                    <p>There are effective treatments available for acute phases of bipolar disorder and the prevention of relapse. Also include medicines that stabilise mood. Psychosocial support is also an important component of treatment.</p>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum2">What causes Bipolar?</summary><br>
                <div id="p">
                    <div class = "alignment">
                        <p>Bipolar disorder appears to result from a combination of factors. These include:</p>
                        <ul>
                            <li><strong>Genetic factors:</strong> Bipolar disorder is more common in those who have a family member with the condition. A number of genetic features may be involved.</li>
                            <li><strong>Environmental factors:</strong> Life events, such as abuse, mental stress or any other traumatic event may trigger an initial episode in a susceptible person.</li>
                            <li><strong>Biological traits:</strong> Research suggests that imbalances in neurotransmitters or hormones that affect the brain may play a role.</li>
                        </ul>
                    </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum3">How can you tell if someone you know might have Bipolar?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <p>A person with bipolar disorder often has cycles of elevated and depressed mood that fit the description of "manic depression". Therefore, when a person's illness follows this pattern, diagnosing bipolar disorder is thus relatively easy. </p>
                    <p> However, Bipolar disorder can be very hard to detect as symptoms can defy the expected manic-depressive sequence. Infrequent episodes of mild mania or hypomania can go undetected. In addition, Depression can overshadow other aspects of the illness. Sometimes, symptoms of depression and mania can occur at the same time. and susbstance abuse, if present can cloud the picture.</p>
                    <p> In addition, Bipolar disorder should only be disgnosed by a medical doctor,clinical psychologist, or other trained health provider who has spent time with the person and has conducted a proper mental health assessment. Diagnoses are complicated with many nuances. Please do not attempt to diagnose someone based on the symptoms you read in magazines or on the internet. If you are concerned, speak to a trained health professional.</p>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum4">Signs and Symptoms?</summary><br>
                <div id="p">
                <ul>
                    <strong><br><div class = "align">Bipolar symptoms include mania and depression symptoms:</div></strong><br>
                    <u>Signs of mania</u>:
                        <li style= 'text-align: left; '>Feeling extremely restless or impulsive.</li>
                        <li style= 'text-align: left; '>Needing less sleep.</li>
                        <li style= 'text-align: left; '>Being overconfident in your abilities.</li>
                        <li style= 'text-align: left; '>Engaging in risky behaviour (like gambling with little money, impulsive sex).</li>
                </ul>
                </div>
            </details>
            <details class="details">
                <summary id="sum5">How to Cope</summary><br>
                <div id="p">
                <ul>
                    <strong><br><div class = "align">Limit your exposure to your triggers:</div></strong><br>
                    <u>Common triggers can include</u>:
                        <li style= 'text-align: left; margin-left: 1em '>Arguments with loved ones</li>
                        <li style= 'text-align: left; margin-left: 1em  '>Challenges at school/work</li>
                        <li style= 'text-align: left; margin-left: 1em '>Lack of sleep</li>
                        <li style= 'text-align: left; margin-left: 1em '>Stress</li>
                        <li style= 'text-align: left; margin-left: 1em '>Financial issues</li>
                    <br><div class = "alignment"><li>Ensure that once you’ve identified your triggers, you limit your exposure to them if possible. If not possible, use coping techniques that can help you endure the situation currently (the other techniques mentioned).</div></li>
                    <strong><br><div class= "align">Know early warning signs:</div></strong>
                    <div class = "alignment"><li>Ensure you’re able to identify warning signs of an approaching manic or depressive episode. What can help is making a list of early signs that accompanied your past mood episodes. Thereafter, with your warning signs and your triggers in mind, keep track of how you’re feeling so as to be able to identify whether you’re experiencing the signs and why.</li></div><br>
                    <u>Common warning signs of depression</u>:
                        <li style= 'text-align: left; margin-left: 1em  '>You’ve started isolating yourself.</li>
                        <li style= 'text-align: left; margin-left: 1em '>People irritate and bother you.</li>
                        <li style= 'text-align: left; margin-left: 1em '>You experience headaches frequently.</li>
                        <li style= 'text-align: left; margin-left: 1em '>You’ve lost interest in others.</li>
                        <li style= 'text-align: left;margin-left: 1em  '>You experience cravings for sweet foods.</li>
                        <li style= 'text-align: left; margin-left: 1em '>You’re sleepy and nap during the day often.</li>
                    <br><u>Common warning signs of mania or hypomania</u>:
                        <li style= 'text-align: left;margin-left: 1em  '>You find it hard to focus.</li>
                        <li style= 'text-align: left; margin-left: 1em '>You’re hungry throughout the day.</li>
                        <li style= 'text-align: left;margin-left: 1em  '>You have increased energy that you need to release by moving.</li>
                        <li style= 'text-align: left; margin-left: 1em  '>You feel easily irritable.</li>
                        <li style= 'text-align: left; margin-left: 1em  '>You’re talking at a faster pace than usual.</li>
                    <strong><br><div class = "align">Take better care of yourself:</div></strong><br>
                    <u><div style = "text-align: left; margin-left: 1.5 em">Self-care that commonly helps people with bipolar disorder reduce their symptoms</div></u>:
                        <li style= 'text-align: left;margin-left: 1em  '>Get enough sleep (no less than 8 hours).</li>
                        <li style= 'text-align: left;margin-left: 1em  '>Join a support group and attend.</li>
                        <li style= 'text-align: left; margin-left: 1em '>Do something fun and creative (journaling, dancing, spending time with loved ones).</li>
                        <li style= 'text-align: left;margin-left: 1em  '>Make time to take a break and relax.</li>
                        <li style= 'text-align: left; margin-left: 1em '>Keep your body active (walk/stretch/exercise).</li>
                        <li style= 'text-align: left;margin-left: 1em  '>Reach out to trustworthy loved ones when you need help.</li>
                        <li style= 'text-align: left;margin-left: 1em  '>Reduce your intake of sweet foods, caffeine and alcohol.</li>
                    <strong><div class = "align"> </br>Connect/network with your support system:</div></strong>
                    <div class = "alignment">
                    <li>Avoid isolating yourself from others. Engaging regularly with loved ones you’re comfortable with is important so that you have trustworthy people to turn to when you need help and support.</li>
                    </div>
                    <strong><br><div class = "align">Minimize your stress levels:</div></strong>
                    <div class = "alignment">
                    <li>Practice deep breathing and meditation or yoga as the relaxation these techniques provide can lift your mood.</li>
                    <li>Make leisure sessions a priority because feeling good and being playful/creative is necessary for your emotional and mental well-being.</li>
                    </div>
                </ul>
                </div>
            </details>
        </div>
        <div id="ptsd">
            <br><br><br><br>
            <h3>PTSD</h3>
            <details class="details">
                <summary id="sum1">What is PTSD?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <p>Post traumatic stress disorder (PTSD) is a a debilitating condition which follows a traumatic event. Also called shell shock, battle fatigue, accident neurosis and post-rape syndrome. PTSD is often misunderstood and misdiagnosed. However, this condition has very specific symptoms that are part of a definite psychiatric disorder.</p>
                    <p><strong><div class = "align">Types of PTSD</div></strong><p>
                    <p> Post traumatic stress disorder is broken down into subtypes depending on a person's symptoms, also known as condition "specifiers" to make it easier to diagnose and treat.</p>
                    <p><strong> Dissociative PTSD:</strong> is when one detaches herself or himself from the trauma. The person feels separated from the event.</p>
                    <p><strong> Comorbid PTSD: </strong> involves symptoms of PTSD along with another mental health disorder like depression, panic disorder, or a substance abuse problem. People with this type get the best results from treating both PTSD and the other mental health issue.</p>
                    <p><strong>  Uncomplicated PTSD: </strong> is when one has PTSD symptoms like re-experiencing the traumatic event and avoiding people and places related to the trauma, but they dont have any other mental health issues such as depression. People with the uncomplicated subtype often respond well to treatment.</p>
                    <p><strong> Acute stress disorder: </strong> it is not PTSD but involves a cluster of symptoms like anxiety and avoidance that develop within a month after a traumatic event. Many people wth ASD go on to develop PTSD. </p>
                </div>  
                </div>
            </details>
            <details class="details">
                <summary id="sum2">What causes PTSD?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <p>PTSD is caused by being exposed to trauma, including experiencing, witnessing or even learning about a severely traumatic experience</p>
                    <br><strong> Events that may cause PTSD include:</strong>
                    <ul>
                        <li>Sexual or physical assault</li>
                        <li> Natural disasters </li> 
                        <li>Auto accidents  </li>
                        <li>Severe injury </li>
                        <li> Abuse or neglect</li>
                        <li>Traumatic birth which is known as postpartum PTSD </li>
                    </ul> 
                    <p> According to the NHS, 1 in 3 people who experience severe trauma will develop PTSD. There are a few factors that make it more likely that someone will develop PTSD after a traumatic event.</p>
                    <strong><p> Risk factors for PTSD include:</p></strong>
                    <ul>
                        <li> having a history of mental health disorders such as panic disorder, depression, or OCD</li>
                        <li> experiencing further trauma or stress around the event </li>
                        <li> having little support from loved ones after the event </li>
                    </ul>
                    <p> In addition to the above, the brain structure and stress hormones may also play a role in the development of PTSD.</p>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum3">How can you tell if someone you know might have PTSD?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <p>A person has PTSD when the symptoms of the disorder cause distress and interference in daily life.  Often, people with PTSD are plagued by persistent frightening memories of the traumatic event called flashbacks; and they constantly emotionally numbed by the ordeal. What makes the flashbacks especially bad is that they bring back the emotions associated with the traumatic event</p>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum4">Signs and Symptoms?</summary><br>
                <div id="p">
                <ul>
                    <strong><br><div class = "align">PTSD symptoms fall into four categories:</div></strong><br>
                    <u>Intrusion</u>:
                        <li style= 'text-align: left; '>Flashbacks that make you feel like you are reliving the event recurrently.</li>
                        <li style= 'text-align: left; '>Nightmares about the event frequently.</li>
                        <li style= 'text-align: left; '>Vivid memories of the event.</li>
                        <li style= 'text-align: left; '>Intense mental and physical when you think about the event.</li>
                    <br><u>Avoidance</u>:
                    <li style= 'text-align: left; '>Avoiding people, places or situations that remind you of the traumatic event.</li>
                    <br><u>Arousal and reactivity</u>:
                        <li style= 'text-align: left; '>Difficulty concentrating.</li>
                        <li style= 'text-align: left; '>Startling easily and having an exaggerated response when you’re startled. </li>
                        <li style= 'text-align: left; '>Feeling on edge constantly.</li>
                        <li style= 'text-align: left; '>Being irritable.</li>
                        <li style= 'text-align: left; '>Bursts of anger.</li>
                    <br><u>Cognition and mood</u>:
                        <li style= 'text-align: left; '>Negative thoughts about yourself.</li>
                        <li style= 'text-align: left; '>Feeling guilty, worry or blame that are distorted.</li>
                        <li style= 'text-align: left; '>Difficulty remembering important parts of the events.</li>
                        <li style= 'text-align: left; '>Decreased interest in activities you once felt passionate about.</li>
                    <strong><div class = "align"></br>People with PTSD can experience depression and panic attacks:</div></strong><br>
                    <u>Panic attacks can have symptoms like</u>:
                        <li style= 'text-align: left; '>Agitation</li>
                        <li style= 'text-align: left; '>Excitability </li>
                        <li style= 'text-align: left; '>Headaches</li>
                        <li style= 'text-align: left; '>Fainting</li>
                        <li style= 'text-align: left; '>Light-heartedness</li>
                        <li style= 'text-align: left; '>Dizziness</li>
                </ul>
                </div>
            </details>
            <details class="details">
                <summary id="sum5">How to Cope</summary><br>
                <div id="p">
                    <ul>
                        <strong><br><div class = "align"> Go for a walk, stretch or exercise:</div></strong>
                        <li>This refocuses your attention on your body movements which helps you cope with PTSD symptoms and reduce your stress levels and - according to Ryan Collins - during physical activity endorphins are released which are a type of neurotransmitter that helps relieve pain as well as stress.</li>
                        <strong><br><div class= "align">Go for art therapy:</div></strong>
                        <li>Art therapy, being one of the types of PTSD therapy, prevents the internalization of your emotions and teaches you ways to cope with unsettling memories and experiences through the use of art.</li>
                        <strong><br><div class = "align">Adopt a pet for PTSD:</div></strong>
                        <li>Getting a pet that’s been trained to identify as well as interrupt the arising of PTSD symptoms is an effective approach to assisting you when it comes to coping with the symptoms. This approach is a short-term way of coping.</li>
                        <li>According to the National Institutes of Health, spending at least a week with a dog that’s specially trained decreased PTSD symptoms by 82%.</li>
                        <strong><div class = "align"> </br>Take a moment to focus on your breathing:</div></strong>
                        <li>Controlling your breathing will slow down your heart rate and redirect your focus on you breathing which helps you avoid being consumed by intrusive thoughts.</li>
                        <strong><br><div class = "align">Redirect your focus:</div></strong>
                        <li>Listen to music, spend time focusing on an enjoyable hobby, read a book or watch something relaxing, pray or meditate to distract you from your anxiety and in turn calm yourself.</li>
                    </ul>
                    <br><strong>The six steps towards recovery:</strong>
                    <div  class = "alignment">
                        <p><strong>STEP 1</strong>: Understand the symptoms-they are part of the disease and will eventually pass.</p>
                        <p><strong>STEP 2</strong>: Feelings of guilt are normal-they represent a way of taking back control. Help from a counselor may be beneficial.</p>
                        <p><strong>STEP 3</strong>: Talk about your experience in detail-your thoughts, feelings and fears. Tell people you are close to that you want to talk about it.</p>
                        <p><strong>STEP 4</strong>: Take control of your life as soon as possible. It is not advisable to go for sleep therapy, on leave or on holiday. It is best to face your fears and feelings rather them to avoid them.</p><p> Exercise (mild aerobic work-outs may help feelings of depression). Do what you normally do- if you find this difficult, get the support of family and friends. It is also important not to push yourself to the point of failure; rather take things slowly and gradually.<p>
                        <p><strong>STEP 5</strong>: Understand that you are going through a process-you will get better, but it may take some time.</p>
                        <p><strong> STEP 6</strong>: Help those around you to cope with both their trauma and your trauma. Your family and friends may also be struggling with what you have been through. There are excellent clinics across the country-try and get help. You may only need a few sessions with a therapist or counselor.</p>
                    </div>
                </div>
            </details>
        </div>
        <div id="adhd">
            <br><br><br><br>
            <h3>Eating Disorder</h3>
            <details class="details">
                <summary id="sum1">What is Eating disorder?</summary><br>
                <div id="p">
                <div class= "alignment">
                    <p>Eating disorder is a behavioural condition characterised by serve and persistent disturbance in eating behaviours and associated distressing thoughts and emotions. Eating disorders can have detrimental effects on the physical, psychological and social function.</p>
                    <p>Eating disorders affect up to 5% of the population, most often develop in adolescence and young adulthood. Several, especially anorexia nervosa and bulimia nervosa are more common in women, but they can all occur at any age and affect any gender.</p> <p>It is characterised by the fear of being overweight (despite the fact that actual weight is in the average or below average range), which can lead to a range of behaviours to reduce weight including severe dieting, self-induced vomiting and excessive exercise.</p>
                <div class = "align">
                    <p><strong>The types of eating disorders are:</strong></p>
                </div>
                    <ul>
                        <li><strong>Anorexia nervosa:</strong> is characterized by self-starvation and weight loss resulting in low weight for height and age. Anorexia has the highest mortality of any psychiatric diagnosis other than opioid use disorder and can be a very serious condition. Body mass index or BMI, a measure of weight for height, is typically under 18.5 in an adult individual with anorexia nervosa. Dieting behavior in anorexia nervosa is driven by an intense fear of gaining weight or becoming fat. Although some individuals with anorexia will say they want and are trying to gain weight, their behavior is not consistent with this intent.</li>
                        <li><strong>Bulimia nervosa:</strong> is an eating disorder, commonly referred to simply as bulimia. It’s a serious condition that can be life-threatening. It’s generally characterized by binge eating followed by purging. Purging can occur through forced vomiting, excessive exercise, or by taking laxatives or diuretics. People with bulimia purge, or display purge behaviors, and follow a binge-and-purge cycle.<p> Purge behaviors also include other strict methods to maintain weight like fasting, exercise, or extreme dieting. People with bulimia often have an unrealistic body image.Research indicates that roughly 2.5 percent of women and 1.5 percent of men will experience bulimia at some point during their life. It is most common in women, and especially common during the teenage and early adult years.</p></li>
                        <li><strong>Binge eating disorder: </strong> people with binge eating disorder have episodes of binge eating in which they consume large quantities of food in a brief period, experience a sense of loss of control over their eating and are distressed by the binge behavior. Unlike people with bulimia nervosa however, they do not regularly use compensatory behaviors to get rid of the food by inducing vomiting, fasting, exercising or laxative misuse. The binge eating is chronic and can lead to serious health complications, including obesity, diabetes, hypertension and cardiovascular diseases.</li>
                        <li><strong>Avoidant restrictive food intake disorder: </strong> Avoidant/restrictive food intake disorder (ARFID) is a recently defined eating disorder that involves a disturbance in eating resulting in persistent failure to meet nutritional needs and extreme picky eating. </li>
                    </ul>  
                </div>                  
                </div>
            </details>
            <details class="details">
                <summary id="sum2">What causes Eating disorders?</summary><br>
                <div id="p">
                <div class= "alignment">
                    <strong><p>Causes of eating disorders.</p></strong>
                    <p>Eating disorders are typically influenced by a facet of factors. Though the exact cause of eating orders is unknown. It is generally believed that a combination of biological, psychological, and/or environmental abnormalities contribute to the development of these illnesses.<p>
                    <p><strong>Biological factors include:</strong></p>
                    <ul>
                        <li>Irregular hormone functions</li>
                        <li>Genetics</li>
                        <li>Nutritional deficiencies</li>   
                    </ul>      
                    <p><strong>Psychological factors include:</strong></p>
                    <ul>
                        <li>Negative body image</li>    
                        <li>Poor self-esteem</li>
                    </ul>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum3">How can you tell if someone you know might have Eating disorder?</summary><br>
                <div id="p">
                    <p>If someone has a Polar eating disorder, whenever they feel sad or not okay emotionally they eat and vomit the food but most of the time it goes with being depressed and trying to overcome the depression using food. Others constantly eat for no reason just feed the disorder.</p>
                </div>
            </details>
            <details class="details">
                <summary id="sum4">Signs and Symptoms?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <ul>
                        <li>Dieting consistently though being concerningly underweight.</li>
                        <li>Depression/lethargic stage.</li>
                        <li>Eating with ritualistic patterns (like eating on your own, playing with your food).</li>
                        <li>Obsessing over calories and fat contents of food.</li>
                        <li>Becoming isolated and avoiding social events and loved ones. </li>
                    </ul>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum5">How to Cope</summary><br>
                <div id="p">
                    <div class = "alignment">
                    <ul>
                    <p><strong><h4><div class = "align">SELF COPING STRATEGIES</div></h4></strong></p>	
                    <br><div class = "align"><strong> Distract yourself:</strong></div>
                    <li>Engage in some form of physical activity – walk, stretch or exercise - when obsessive thoughts arise. This refocuses your attention on your body movements relieving stress as well as tension. It can help increase your ability to resist temptations of giving in to obsessive urges. Another way to distract yourself when obsessive thoughts arise is by spending time focusing on an enjoyable hobby.</li>
                    <br><strong><div class = "align">Practice mindfulness:</div></strong>
                    <li>Meditation, prayer and yoga are effective ways to help yourself increase awareness regarding your triggers and help you develop self-control.</li> 
                    <br><strong><div class = "align">Limit your exposure to your triggers:</div></strong>
                    <li>Identify your triggers then limit your exposure to them if possible. A way to limit your exposure to a trigger would be to rid your kitchen of any foods that tempt you to obsessively eat, for example. If not possible, use coping techniques that can help you endure the situation currently (the other techniques mentioned). </li>
                    <br><strong><div class = "align">Get enough sleep:</div></strong>
                    <li>Irregular eating patterns can be induced by lack of sleep. Ensuring that you get enough sleep can help decrease your triggers and regulate your eating patterns.</li>
                    </ul>
                    </div>
                </div>
            </details>
        </div>
        <div id="autism">
            <br><br><br><br>
            <h3>Substance Abuse Disorder</h3>
            <details class="details">
                <summary id="sum1">What is Substance Abuse Disorder?</summary><br>
                <div id="p">
                    <div class ="alignment">
                        <p>Substance use disorder is referred as the persistent use of alcohol including drugs despite substantial harm and adverse consequences. Substance use disorders are characterised by an array of mental or emotional, physical, and behavioral problems such as an inability to reduce or stop consuming the substance(s) despite repeated attempts; chronic guilt; driving while intoxicated and physiological withdraw symptoms. </p>
                    </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum2">What causes Substance Abuse Disorder?</summary><br>
                <div id="p">
                    <div class = "alignment">
                    <p>The exact cause of substance disorder is not known but however, emotional distress, anxiety, depression, a person's genes and environmental stress can all be the factors </p>
                    <p><strong> A person's genetics</strong>: Once a person starts a drug, the development into addiction may be influenced by inherited (genetic) traits, which may delay or speed up the disorder progression.</p>
                    <p><strong> Environment factor:</strong> This factor includes one's family beliefs and attitudes and exposure to a peer group that encourages drug use seem to play a significant role in initial drug use.</p>
                    </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum3">How can you tell if someone you know might have substance abuse disorder?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <p>If someone is experiencing substance abuse problem, it really depends which substance are they consuming but with regards to the problem, you will see them always consuming that thing e.g. alcohol or drugs without a stop. Most of the time they can’t control themselves because they are now addicted they rely on these things basically they can’t live without them.</p>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum4">Signs and Symptoms?</summary><br>
                <div id="p">
                <div class = "alignment">
                    <ul>
                        <li>Spending money on drugs and alcohol even though you can’t afford it.</li>
                        <li>Not succeeding in your attempts to stop using drugs or alcohol.</li>
                        <li>Doing unusual or risky things to get drugs or alcohol (like stealing).</li>
                        <li>Continuing to use drugs and alcohol, even though you’re aware it’s causing issues in your life.</li>
                    </ul>
                </div>
                </div>
            </details>
            <details class="details">
                <summary id="sum5">How to Cope</summary><br>
                <div id="p">
                <ul>
                        <strong><br><div class = "align">Practice mindfulness:</div></strong>
                        <li>Make use of mindfulness and meditation techniques which can assist you with working through challenging thoughts and emotions by helping you refocus your attention and accept your experiences and challenges without judgement or negativity.</li>
                        <strong><br><div class= "align">Distract yourself:</div></strong>
                        <li>Engage in some form of physical activity – walk, stretch, dance, read, watch TV or exercise - when triggering hardships arise. This refocuses your attention on your body movements and anything other than your challenging emotions and thoughts. In this way, after a while of practicing this way of coping, you can replace the habit of resorting to substances with a healthier and productive habit. This takes time and discipline – so be patient with yourself while also holding yourself accountable.</li>
                        <strong><br><div class = "align">Journal:</div></strong>
                        <li>This helps you avoid internalizing your feelings and thoughts by releasing them on paper. Challenging emotions and thoughts are meant to be released but only in productive and healthy ways – journaling being one of those ways. It can also help you process your emotions and thoughts.</li>
                        <strong><div class = "align"> </br>Build a sober support system/network:</div></strong>
                        <li>Understanding that you are not alone (and do not have to be alone) is important. Open yourself up to new relationships that will support and encourage your recovery and surround yourself with people you can rely on and trust with your challenges as well as reach out to in times of need.</li>
                        <strong><br><div class = "align">Become a part of a support group and attend meetings:</div></strong>
                        <li>These meetings can provide you with guidance to reduce/manage or stop substance use. Not only that; during these meetings you can meet people recovering who can be a part of your support system/network.</li>
                    </ul>
                </div>
            </details>
        </div>
        
    </div>
    
    </div>
     <!-- Footer -->
    <footer>
        <div class="more"><b>About</b>
          <div class="morecontent"> Our aim as the Let's heal organisation is to present an effective and innovative way to tackle and solve the social issue that is mental health(or the lack thereof) and illness by means of a website. Therefore, our content is purely made for bringing awareness within societies.<br>
           <p><b>Support</b></p>
           <a href="https://www.facebook.com/TheSADAG/" class="fa fa-facebook" target="_blank"></a>
           <a href="https://twitter.com/thesadag" class="fa fa-twitter" target="_blank"></a>
           <a href="https://www.instagram.com/thesadag/?hl=en" class="fa fa-instagram"  target="_blank"></a>
       <a href="https://www.youtube.com/user/Psych2GoTv" class="fa fa-youtube" target="_blank"></a>
       <p class="created">Created by CTRL Intelligence 2021 All rights reserved</p>


      
          </div>
        </div>
        
     <!-- Contact us form -->
        <div class="contact">
          
        <form action="definition.php#form" id="form" method="post">
       <span  ><b> Contact us</b> </span><br>
        <label for=""> <span class="contacta" >Email</span> </label> <br> <input type="email" name="email" size=30px  required> <br>
        <label for=""> <span class="contacta" >Message</span> </label> <br> <textarea name="msg" id="" cols="35" rows="8" required></textarea> <br>
        <span class="succ"><?php echo $arrSucc['succ']; ?></span>
        <button id="button" name="send">Send Email</button>
      </form>
        
    
        </div>
      
         
    
      </footer>
  <script src="app.js"></script>
</body>
</html>