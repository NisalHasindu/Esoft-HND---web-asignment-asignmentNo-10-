<?php sleep(2);?>
<!--division for home page-->
<div id="home">
    <link rel="stylesheet" href="inc/contant_homePage_style.css"> 
    <div class="divSearch">
        <div class="divSearchInput">
            <input type="text" id="txtSearch" placeholder="search book">
            <i class="fas fa-search"></i>
        </div>
    </div>
    <div class="bookDetalis">
        <label for="" id="lblCatagery">select your book catagery</label>
        <select name="bookCatagery" id="selBookCatagery">
            <option value="">select book catagery</option>
            <option value="Anthology" id="opt">Anthology</option>
            <option value="Classic" id="optClassic">Classic</option>
            <option value="ComicAndGraphicNovel" id="optComicAndGraphicNovel">Comic and Graphic Novel</option>
            <option value="CrimeAndDetective" id="optCrimeAndDetective">Crime and Detective</option>
            <option value="Drama" id="optDrama">Drama</option>
            <option value="Fable" id="optFable">Fable</option>
            <option value="FairyTale" id="optFairyTale">Fairy Tale</option>
            <option value="Fan-Fiction" id="optFan-Fiction">Fan-Fiction</option>
            <option value="Fantasy" id="optFantasy">Fantasy</option>
            <option value="HistoricalFiction" id="optHistoricalFiction">Historical Fiction</option>
            <option value="Horror" id="optHorror">Horror</option>
            <option value="Humor" id="optHumor">Humor</option>
            <option value="Legend" id="optLegend">Legend</option>
            <option value="MagicalRealism" id="optMagicalRealism">Magical Realism</option>
            <option value="Mystery" id="optMystery">Mystery</option>
            <option value="Mythology" id="optMythology">Mythology</option>
            <option value="RealisticFiction" id="optRealisticFiction">Realistic Fiction</option>
            <option value="Romance" id="optRomance">Romance</option>
            <option value="Satire" id="optSatire">Satire</option>
            <option value="ScienceFiction(Sci-Fi)" id="optScienceFiction(Sci-Fi)">Science Fiction (Sci-Fi)</option>
            <option value="ShortStory" id="optShortStory">Short Story</option>
            <option value="Suspense/Thriller" id="optSuspense/Thriller">Suspense/Thriller</option>
        </select>
    </div>
    <hr>
    <table id="tblBookDetails">
        <tr>
            <td id="bookImage"></td>
            <td id="bookName">name of book</td>
            <td id="bookPublisher">publisher</td>
            <td id="bookStatus">status</td>
            <td id="bookAction">action</td>
        </tr>
        <tr>
            <td id="bookImage"><img src="img/51Wrlbko5QL.jpg" alt=""></td>
            <td id="bookName">
                <h3>In Search of Lost Time by Marcel Proust</h3>
                <p>Swann's Way, the first part of A la recherche de temps perdu,  
                    Marcel Proust's seven-part cycle, was published in 1913. In it, 
                    Proust introduces the themes that run through the entire work. 
                    The narr... 
                </p>
            </td>
            <td id="bookPublisher">mal piyali</td>
            <td id="bookStatus">Available</td>
            <td id="bookAction"><button id="btnBarrowBook" onclick="barrowBook()">barrow</button></td>
        </tr>
    </table>
</div>

<!--division for my profile page-->
<div id="myProfile">
    <link rel="stylesheet" href="inc/contant_myProfile_style.css">
    <div class="topic">
        <button name="back" id="btnBack" onclick="backToHome()">back</button>
        <p>My Profile</p>
    </div>
        <div class="divDetails">
            <div class="profileDetails">
                <label id="subTopic">Profile Details</label>
                <form action="" method="post">
                    <input type="text" id="txtFirstName" placeholder="first name">
                    <input type="text" id="txtLastName" placeholder="last name">
                    <input type="text" id="txtEmail" placeholder="email">
                    <input type="text" id="txtNic" placeholder="NIC">
                    <input type="text" id="txtAddress" placeholder="address / zip">
                    <select name="profession" id="selProfession">
                        <option value="profetion">select the profession</option>
                        <option value="Prpfeser">Prpfeser</option> 
                        <option value="Student">Student</option> 
                    </select>
                    <hr>
                    <label for="" id="subTopic">Change Password</label>
                    <input type="text" id="txtNewPassword" placeholder="new password">
                    <input type="text" id="txtConformPassword" placeholder = "conform password">
                    <button name="update" id="bntUpdate">Update Account</button>
                </form>
                
            </div>
            <div class="panaltyDetalis">
                <label for="" id="subTopic">Panalty Details</label>
                <table id="tblPanaltyDetails">
                    <tr>
                        <td>book name</td>
                        <td>barrow day</td>
                        <td>date of return</td>
                    </tr>
                   
                </table>
            </div>
        </div>
    

</div>

<!--division for barrowig books page-->
<div id="barrowingBooks">
    <link rel="stylesheet" href="inc/contant_barrowingBooks_style.css">
    <div class="topic">
        <button name="back" id="btnBack" onclick="backToHome()">back</button>
        <p>Barrowing Books</p>
    </div>
        <div class="divBookBarrowDetails">
            <div class="bookBarrowDetails">
                <form action="" method="post">
                    <input type="text" id="txtUserName" placeholder="User Name">
                    <input type="password" id="txtPassword" placeholder="Password">
                    <input type="text" id="txtNic" placeholder="NIC">
                    <input type="text" id="txtDiscription" placeholder="Desicription">
                    <button name="barrow" id="bntBarrow">Barrow</button>
                    <button name="cansel" id="bntCansel">Cansel</button>
                </form>
            </div>
            <div class="roolsAndRegulations">
                <label for="" id="subTopic">Rools and Regulations</label>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione culpa ipsa reprehenderit odio suscipit veniam enim recusandae, consectetur ea natus atque ad fuga nulla a voluptate nobis dolor qui omnis!</p>
            </div>
        </div>
</div>


