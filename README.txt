Firstly: this exercise was really enjoyable.
Now to important notes regarding the implementation of the required patterns


Strategy Pattern refers to the separation of logic by giving the application the ability to switch behaviors at runtime.
With that said the uses of classes alone is enough implementation of the Strategy Pattern in my project as it allows me to submit a form with the defined sort algorithm or mergeSort as default and that will change the behaviour of the sort algorithm to whichever was selected at runtime.

MVC: the implementation of this pattern was utilised in a sense the there's a main Controller under the Library namespace in the library folder that's called to implement the view and data by any corresponding controller that is deemed "selected" by user's location in the application.
This controller will implement the view and also return data from it's Model counterpart if the controller is one that should query the model for Data.

PHPUnit: unit testing was implemented using PHPUnit testing which comes with great pakcages found in the vendor folder from home directory and when the test is ran using Bash CLI it runs the test file found in tests folder which is also in the home directory.