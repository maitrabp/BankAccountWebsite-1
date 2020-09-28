# [BankAccountWebsite]
This website I made while I was learning PHP. It allows the user to make a profile, perform transactions such as withdraw, deposit, and credit card transactions. It also allows the user to apply for a credit card based on their credit score, and apply for a loan. The main dashboard displays all information about the account.

# App Features
  ## Login
  * If the user tries to access the homepage without logging in, they will be redirected to the login page. 
  * Once they are logged in, a cookie is saved on their computer so that they dont have to login all the time. 
  * On click of 'Logout', the cookie is removed/destroyed. 
  * User is able to navigate to the register page from the login page, that's if they dont already have an account with the bank. 
      ### Login Validation:
      * If the account does not exist in our record, system will notify the user. 
      * If the user has an account but types the wrong password, system will notify the user. 
      * If the user would like to change their password, they are able to do that as long as they know their unique username. 
  ## Dashboard
  * Once the user logs into their account, they will be brought to a dashboard which is the homepage of the application. 
  * This dashboard displays balance of all accounts associated with this user. 
  * It also shows their earnings which is a difference of how much they deposited and how much they withdrawed after their initial deposit. 
  * On the bottom, it displays all transactions made by this user (most recent at the top)
  * On the navigation menu, the user is presented with options to withdraw, deposit, apply for loan, apply for credit card, logout, or view their profile (simply by clicking their name).
  ## Loan Application
  * The system allows a user to get the loan based on their credit score. If their credit score is not adequate, an exception will be thrown. 
  * Once the user applies for a loan for a certain amount of years, interest will be automatically added to their final balance due. This final amount will be displayed on the dashboard. 
  
  ## Credit Card Application
  * Similar to Loan Application, User is able to register for a credit card based on their credit score.
  * Credit Card Account behaves similar to a checking account which means the user will be able to deposit & withdraw. 
  
  ## Potential Changes in Future Versions
  *  I want to make the credit card usable, so for example I was thinking I can manually have the user add their transactions made through this credit card in the future. 
  * Would also like to allow the user to pay off their debt acquired in the credit card, however there will be no timeframe for paying off. 
  * I would also like to do the same with loan, the user can currently get the loan but there is no way for them to pay it off. Therefore, this is one of my future goal. 
  * I would also like to add a filter to the transaction table below, so that the user to check their specific account. 

# Author
* Maitra Patel
# Built Using
* [PHP]
* [HTML]
* [CSS]
* [JS]
* [Bootstrap]


[PHP]: https://www.php.net/manual/en/install.php
[HTML]: https://developer.mozilla.org/en-US/docs/Web/HTML
[CSS]: https://developer.mozilla.org/en-US/docs/Web/CSS
[JS]: https://developer.mozilla.org/en-US/docs/Web/JavaScript
[Bootstrap]: https://getbootstrap.com/
[BankAccountWebsite]: https://m18e-commerce.000webhostapp.com/bankaccount/
