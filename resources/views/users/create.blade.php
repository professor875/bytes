<x-layout>
    <div class="h-screen w-screen flex justify-center items-center p-16">
        <div class="w-fit rounded-xl bg-gray-200 border border-gray-400 p-10">
            <h1 class="text-2xl text-center mb-4">Register Your Account</h1>
            <form class="space-y-4" action="{{ route('user.store') }}" method="post">
                @csrf
                <!-- name fields -->
                <div class="flex w-full space-x-4 justify-between">
                    <x-input pname="firstName"/>
                    <x-input pname="lastName"/>
                </div>

                <!-- gender and hobbies fields  -->
                <div class="flex justify-around">
                    <label for="gender">
                        Male
                        <input type="radio" id="gender" name="gender" value="male">
                    </label>
                    
                    <label for="gender">
                        Female
                        <input type="radio" id="gender" name="gender" value="female">
                    </label>
                </div>

                <div class="flex justify-around">
                    <label for="hobbies">
                        Cricket
                        <input type="checkbox" name="hobbies[]" value="Cricket">
                    </label>
                    
                    <label for="hobbies">
                        Hockey
                        <input type="checkbox" name="hobbies[]" value="hockey">
                    </label>

                    <label for="hobbies">
                        other
                        <input type="checkbox" name="hobbies[]" value="other">
                    </label>
                </div>

                <!-- country and about fields  -->

                <div class=" flex justify-center space-x-4">
                    <p>Please Select Your Country :</p>
                    <select name="country" id="country" class="bg-white px-3 border border-gray-500 rounded-lg">
                        <option disabled selected>please select your country</option>
                        <option value="pak">Pakistan</option>
                        <option value="uae">UAE</option>
                        <option value="us">US</option>
                        <option value="other">other</option>
                    </select>
                </div>

                <div class=" flex flex-col space-y-4 justify-center items-center">
                    <textarea class="p-4 rounded-lg border border-blue-500"
                        placeholder="Let us know something about yourself !!"
                        name="about" id="about" cols="30" rows="3"></textarea>
                    <x-input pname="email" />
                </div>
            
                <!-- Password fields -->
                <div class="flex w-full space-x-4 justify-between">
                    <x-input type="password" pname="password"/>
                    <x-input type="password" pname="confirm" placeholder="Please confirm your Password.." name="password_confirmation"/>
                </div>

                <div class=" flex justify-center items-center">
                    <button class="px-3 py-1 bg-green-400 hover:bg-green-500 border border-green-500 rounded-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>

</x-layout>