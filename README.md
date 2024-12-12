# MarketPlace_CoolDevs

**Fall 2024**  
**CMPE 272**  
**Term Project**  

**Group: CoolDevs**  
- Ravi Teja Gattu - 017503746  
- Krishna Shreya - 017416724  
- Pawan Aditya M - 017506450  
- Hafeeza Samreen - 017597008
  
**Test Cases**
---

## **TEST CASES**

### **Test Case 1: Register**
**Preconditions:**  
User is not registered.  

**Test Steps:**
1. Launch the website URL.  
2. Enter a valid username in the username field.  
3. Enter a valid password in the password field.  
4. Click on the "Register" button.  

**Expected Result:**  
User is successfully registered and navigated to the login page.

---

### **Test Case 2: User Login and Homepage Access**
**Preconditions:**  
User has valid login credentials.  

**Test Steps:**
1. Launch the website URL.  
2. Enter a valid username in the username field.  
3. Enter a valid password in the password field.  
4. Click on the "Login" button.  

**Expected Result:**  
User is successfully logged in and navigated to the homepage.  

**Postconditions:**  
User session is active, and the homepage UI is displayed with multiple options to proceed further.

---

### **Test Case 3: Access Multiple Marketplaces**
**Preconditions:**  
User is logged in and on the homepage.  

**Test Steps:**
1. Identify and verify the presence of "Marketplace" buttons on the homepage.  
2. Click on a marketplace button.  
3. Verify if the marketplace page loads successfully.  
4. Repeat for other marketplace buttons to ensure accessibility.  

**Expected Result:**  
Each marketplace page should load successfully with its respective products.  

**Postconditions:**  
User can access multiple marketplaces from the homepage.

---

### **Test Case 4: Display of Most Recently Visited Products**
**Preconditions:**  
User is logged in and on the homepage.  

**Test Steps:**
1. Open a marketplace from the homepage.  
2. Navigate to multiple products within the marketplace.  
3. Return to the homepage.  
4. Check if the most recently visited products are displayed on the homepage.  

**Expected Result:**  
The homepage should display a list of the most recently visited products.  

**Postconditions:**  
Recently visited product list is displayed and updated dynamically.

---

### **Test Case 5: Navigate Back to Common Home from Marketplace**
**Preconditions:**  
User is inside a marketplace.  

**Test Steps:**
1. Open a marketplace.  
2. Verify the presence of a "Home" button or navigation link.  
3. Click on the "Home" button.  
4. Verify that the user is redirected to the homepage.  

**Expected Result:**  
User is successfully redirected to the homepage from the marketplace.  

**Postconditions:**  
User is on the homepage.

---

### **Test Case 6: Product Visit Count Increment**
**Preconditions:**  
User is inside a marketplace.  

**Test Steps:**
1. Identify a product and note its current visit count.  
2. Click on the product to open its details page.  
3. Return to the marketplace product listing.  
4. Check if the visit count for the product has increased by 1.  

**Expected Result:**  
Product visit count should be incremented by 1 each time it is visited.  

**Postconditions:**  
The product’s visit count reflects the latest count.

---

### **Test Case 7: Add Review for Product in Marketplace**
**Preconditions:**  
User is inside a marketplace and viewing a product details page.  

**Test Steps:**
1. Open the details page of a specific product.  
2. Scroll down to the "Add Review" section.  
3. Enter the review text in the input field.  
4. Click on the "Submit" button.  

**Expected Result:**  
The review should be submitted successfully and displayed under the product reviews section.  

**Postconditions:**  
User's review is displayed on the product page.

---

### **Test Case 8: Add Rating for Product in Marketplace**
**Preconditions:**  
User is inside a marketplace and viewing a product details page.  

**Test Steps:**
1. Open the details page of a specific product.  
2. Scroll down to the "Add Rating" section.  
3. Select a star rating (e.g., 1 to 5 stars).  
4. Click on the "Submit" button.  

**Expected Result:**  
The rating should be submitted successfully and displayed under the product ratings section.  

**Postconditions:**  
User's rating is displayed on the product page.

---

### **Test Case 9: Display of Top 5 Products in a Marketplace**
**Preconditions:**  
User is inside a marketplace.  

**Test Steps:**
1. Access the marketplace from the homepage.  
2. Verify if a section is displayed for "Top 5 Products".  
3. Check that the list contains 5 products ranked by the number of visits.  
4. Verify the visit count is displayed for each product.  

**Expected Result:**  
The marketplace should display the top 5 products based on the most visits.  

**Postconditions:**  
Top 5 products are visible on the marketplace page.

---

### **Test Case 10: Display of Top 5 Products Across All Marketplaces**
**Preconditions:**  
User is logged in and on the homepage.  

**Test Steps:**
1. From the homepage, check if there is a section for "Top 5 Products Across All Marketplaces".  
2. Verify that the section displays products from all marketplaces.  
3. Check that the products are ranked by the number of visits.  
4. Verify the visit count is displayed for each product.  

**Expected Result:**  
The homepage should display the top 5 products across all marketplaces, ranked by the most visits.  

**Postconditions:**  
Top 5 products across all marketplaces are visible on the homepage.

---

### **Test Case 11: Fancy UI and Visual Interactivity**
**Preconditions:**  
User is on the homepage or marketplace page.  

**Test Steps:**
1. Observe the visual design, animations, and interactivity of UI components (buttons, menus, images, text, etc.).  
2. Verify that animations are smooth and without glitches.  
3. Check responsiveness (UI adjusts correctly to screen size and device).  
4. Verify that interactive elements (like hover, click animations) work as expected.  

**Expected Result:**  
The UI should be visually interactive, responsive, and provide smooth animations for the best customer experience.  

**Postconditions:**  
UI elements are fully functional and visually appealing.
