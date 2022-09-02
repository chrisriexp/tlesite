<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/tailwind.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>Auto Lead Submission</title>
</head>
<body class="bg-custom-back">
    <div class="nav-bar container row px-10 py-5">
        <a href="../index.php" class="text-action text-xl font-semibold uppercase ">The <span class="text-red-400">Lead</span> Exchange</a>
    </div>

    <h1 class="text-center text-4xl text-darktext font-semibold uppercase mt-20">Auto Insurance Lead Submission</h1>

    <form class="grid justify-items-center mt-20 mx-64">
        <div class="py-10 border-b-4 border-action w-full">
            <h1 class="text-darktext font-semibold text-2xl uppercase">Agent</h1>

            <div class="grid grid-cols-3 mt-4 w-fit">
                <div class="grid col">
                    <label for="agentFirstName" class="text-lighttext">Agent First Name <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="agentFirstName" id="agentFirstName">
                </div>

                <div class="grid  col">
                    <label for="agentLastName" class="text-lighttext">Agent Last Name <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="agentLastName" id="agentLastName">
                </div>

                <div class="grid col ml-16">
                    <label for="agentPhone" class="text-lighttext">Agent Phone <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="agentPhone" id="agentPhone">
                </div>
            </div>

            <div class="grid grid-cols-2 gap-2 mt-2 w-fit">
                <div class="grid col">
                    <label for="agentEmail" class="text-lighttext">Email <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-96 h-10 rounded-md mt-2 text-white" name="agentEmail" id="agentEmail">
                </div>

                <div class="grid col">
                    <label for="agentAgency" class="text-lighttext">Agency <span class="text-red-600">*</span></label>
                    <input type="text" class="bg-action w-96 h-10 rounded-md mt-2 text-white" name="agentAgency" id="agentAgency">
                </div>
            </div>
        </div>

        <div class="py-10 w-full border-action border-b-4">
            <h1 class="text-darktext font-semibold text-2xl uppercase">Client</h1>

            <div class="grid grid-cols-3 mt-4 gap-x-16 w-fit">
                <div class="grid col w-full gap-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="grid col">
                            <label for="firstName" class="text-lighttext">First Name <span class="text-red-600">*</span></label>
                            <input type="text" name="firstName" id="firstName" class="bg-action w-48 h-10 rounded-md mt-2 text-white">
                        </div>

                        <div class="grid col">
                            <label for="lastName" class="text-lighttext">Last Name <span class="text-red-600">*</span></label>
                            <input type="text" name="lastName" id="lastName" class="bg-action w-48 h-10 rounded-md mt-2 text-white">
                        </div>
                    </div>

                    <div class="grid col">
                        <label for="dob" class="text-lighttext">Date of Birth <span class="text-red-600">*</span></label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="dob" id="dob">
                    </div>

                    <div class="grid col">
                        <label for="dlNum" class="text-lighttext">DL Number</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="dlNum" id="dlNum">
                    </div>
                </div>

                <div class="grid col w-full h-fit gap-y-6">
                    <div class="grid">
                        <label for="agentEmail" class="text-lighttext">Email <span class="text-red-600">*</span></label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="agentEmail" id="agentEmail">
                    </div>

                    <div class="grid">
                        <label for="occupation" class="text-lighttext">Occupation</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="occupation" id="occupation">
                    </div>
                </div>

                <div class="grid col w-full h-fit gap-y-6">
                    <div class="grid">
                        <label for="phone" class="text-lighttext">Phone <span class="text-red-600">*</span></label>
                        <input type="text" class="bg-action w-48 h-10 rounded-md mt-2 text-white" name="phone" id="phone">
                    </div>

                    <div class="grid">
                        <label for="education" class="text-lighttext">Education</label>
                        <select name="education" id="education" class="bg-action w-48 h-10 rounded-md mt-2 text-white">
                            <option value="hs">High School</option>
                            <option value="sc">Some College</option>
                            <option value="a">Associates</option>
                            <option value="b">Bachelors</option>
                            <option value="m">Masters</option>
                            <option value="phd">PHD</option>
                            <option value="trade">Trade/Vocational School</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 mt-16 gap-x-36 w-full">
                <div class="grid col w-full h-fit gap-y-6">
                    <div class="grid">
                        <label for="address" class="text-lighttext">Address <span class="text-red-600">*</span></label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="address" id="address">
                    </div>

                    <div class="grid">
                        <label for="address2" class="text-lighttext">Address 2</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="address2" id="address2">
                    </div>

                    <div class="grid">
                        <label for="city" class="text-lighttext">City <span class="text-red-600">*</span></label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="city" id="city">
                    </div>

                    <div class="grid col grid-cols-2 gap-4">
                        <div class="grid col">
                            <label for="state" class="text-lighttext">State <span class="text-red-600">*</span></label>
                            <input type="text" name="state" id="state" class="bg-action w-48 h-10 rounded-md mt-2 text-white">
                        </div>

                        <div class="grid col">
                            <label for="zip" class="text-lighttext">Zip <span class="text-red-600">*</span></label>
                            <input type="text" name="zip" id="zip" class="bg-action w-48 h-10 rounded-md mt-2 text-white">
                        </div>
                    </div>
                </div> 

                <div class="grid col w-full h-fit gap-y-6">
                    <h1 class="text-darktext font-semibold text-2xl uppercase">Policy / Vehicle Information</h1>

                    <div class="grid">
                        <label for="current-carrier" class="text-lighttext">Current Carrier</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="current-carrier" id="current-carrier">
                    </div>

                    <div class="grid">
                        <label for="current-prem" class="text-lighttext">Current Premium (e.g., $1,000 = 1000)</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="current-prem" id="current-prem">
                    </div>

                    <div class="grid">
                        <label for="policyExp" class="text-lighttext">Policy Expiration Date (DD/MM/YYYY)</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="policyExp" id="policyExp">
                    </div>

                    <div class="grid">
                        <label for="ymm" class="text-lighttext">Year, Make & Model</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="ymm" id="ymm">
                    </div>

                    <div class="grid">
                        <label for="vin" class="text-lighttext">Vin Number</label>
                        <input type="text" class="bg-action w-128 h-10 rounded-md mt-2 text-white" name="vin" id="vin">
                    </div>
                </div>
            </div>
        </div>

        <div class="py-10 w-full">
            <div class="grid grid-cols-2 gap-14 w-full">
                <div class="grid col">
                    <div class="grid mt-4">
                        <div class="grid">
                            <label for="additional-info" class="text-lighttext">Additional Information</label>
                            <textarea name="additional-info" id="additional-info" cols="30" rows="10" class="bg-action rounded-md mt-2 text-white pl-4 pt-2"></textarea>
                        </div>  
                    </div>
                </div>

                <div class="grid col">
                    <div class="grid mt-4 gap-y-6 h-fit">
                        <div class="grid gap-2">
                            <label for="upload" class="text-lighttext">Upload File <span class="text-red-600">*</span></label>
                            <input type="file" name="upload" id="upload" class="bg-action text-white rounded-md p-2 px-6">
                        </div>

                        <div class="grid gap-2">
                            <label for="upload1" class="text-lighttext">Upload File</label>
                            <input type="file" name="upload1" id="upload1" class="bg-action text-white rounded-md p-2 px-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <input type="submit" name="home-submit" id="home-submit" class="text-xl uppercase text-white bg-action p-2 px-10 rounded-md my-20">
    </form>
</body>
</html>