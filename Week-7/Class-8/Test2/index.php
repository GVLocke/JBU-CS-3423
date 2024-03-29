<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="test.css">
        <script>
            function mylogin() {
                document.getElementById("login-section").style.display="block";
                document.getElementById("register-section").style.display="none";
            }
            function myregister() {
                document.getElementById("register-section").style.display="block";
                document.getElementById("login-section").style.display="none";
            }
        </script>
        <body>
            <table class="login-register">
                <tr>
                    <td> <p class="tabletext"><script>document.write(new Date().getFullYear())</script>
</p>
                    <p class="tabletext">Is the Year of the Linux Desktop</p></td>
                </tr>
            </table>
            <br>
            <div class="login-register-section">
                <div id="login" class="login-register">
                    <button class="button" onclick="mylogin()">Login</button>
                </div>
                <br>
                <div id="register" class="login-register" onclick="myregister()">
                    <button class="button">Register</button>
                </div>
            </div>
            <br><br><br>
            <div id="login-section" class="login-section" style="display: none;">
                <form name="login-form" method="POST" action="validate-login.php">
                    <table class="form-table">
                        <tr>
                            <td><p class="formtext">UserID</p></td> 
                            <td><input type="text" name="userid" id="userid"></td>
                        </tr>
    
                        <tr>
                            <td><p class="formtext">Password</p></td>
                            <td><input type="password" name="password" id="password"> </td>
                        </tr>
                        <tr>
                            <td><input class="input-field" type="submit" name="Login" id="Login" value="Login"></td>
                            <td><input class="input-field" type="reset" name="reset" id="reset" value="Reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="register-section" class="login-section" style="display: none;">
                <form>
                    <table class="form-table">
                        <tr>
                            <td><p class="formtext">First Name</p></td> 
                            <td><input type="text" name="FirstName" id="FirstName"></td>
                        </tr>
                        <tr>
                            <td><p class="formtext">Last Name</p></td> 
                            <td><input type="text" name="LastName" id="LastName"></td>
                        </tr>
                        <tr>
                            <td> <p class="formtext">Gender</p> </td>
                            <td>
                                <input type="radio" name="Gender" id="Gender" value="male"> Male <br>
                                <input type="radio" name="Gender" id="Gender" value="female"> Female <br>
                                <input type="radio" name="Gender" id="Gender" value="prefer-not-to-say"> Prefer Not to Say <br>
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="formtext">Date of Birth</p></td>
                            <td>
                                <input type="date" name="date" id="date">
                            </td>
                        </tr>
                        <tr>
                                <td>  <p class="formtext">Eductation Level</p></td>
                                <td>
                                    <select name="EducationLevel" id="EducationLevel">
                                        <option value="null">Select Highest Education Level</option>
                                        <option value="HighSchool">High School</option>
                                        <option value="Undergraduate">Undergraduate</option>
                                        <option value="Masters">Masters</option>
                                        <option value="PhD">PhD</option>
                                    </select>
                                </td>
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="formtext">Skillset</p></td>
                            <td>
                                <select name="Skillset" id="Skillset">
                                    <option value="null">Select a Skill</option>
                                    <option value="C">C</option>
                                    <option value="C++">C++</option>
                                    <option value="Java">Java</option>
                                    <option value="Python">Python</option>
                                    <option value="PHP">PHP</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="HTML">HTML</option>
                                    <option value="CSS">CSS</option>
                                    <option value="SQL">SQL</option>
                                    <option value="NoSQL">NoSQL</option>
                                    <option value="MongoDB">MongoDB</option>
                                    <option value="MySQL">MySQL</option>
                                    <option value="Oracle">Oracle</option>
                                    <option value="PostgreSQL">PostgreSQL</option>
                                    <option value="SQLite">SQLite</option>
                                    <option value="MariaDB">MariaDB</option>
                                    <option value="Git">Git</option>
                                    <option value="GitHub">GitHub</option>
                                    <option value="GitLab">GitLab</option>
                                    <option value="BitBucket">BitBucket</option>
                                    <option value="Jira">Jira</option>
                                    <option value="Confluence">Confluence</option>
                                    <option value="Jenkins">Jenkins</option>
                                    <option value="Docker">Docker</option>
                                    <option value="Kubernetes">Kubernetes</option>
                                    <option value="AWS">AWS</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td> <p class="formtext">UserID</p></td>
                            <td><input type="userid" name="userid" id="userid"></td>
                        </tr>
                        <tr>
                            <td> <p class="formtext">Password</p></td>
                            <td><input type="password" name="Password" id="Password"> </td>
                        </tr>
                        <tr>
                            <td><input class="input-field" type="submit" name="Login" id="Login" value="Login"></td>
                            <td><input class="input-field" type="reset" name="reset" id="reset" value="Reset"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </body>
    </head>
</html>