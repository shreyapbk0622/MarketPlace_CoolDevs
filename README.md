# Marketplace Application

# Term Project - FALL 2024 - CMPE 272

**Group: CoolDevs**  
- Krishna Shreya - 017416724  
- Pawan Aditya M - 017506450  
- Hafeeza Samreen - 017597008
- Ravi Teja Gattu - 017503746 
  
## Project Overview

This project is a comprehensive Marketplace application developed as part of the CMPE 272 Term Project. It allows users to explore multiple marketplaces, add reviews and ratings to products, and view the top-rated products across marketplaces. The application is designed with user interactivity and smooth performance in mind.

## Project Deployment Link : http://ec2-3-145-156-205.us-east-2.compute.amazonaws.com:8080/home.php

## Project Explanation video Link: https://youtu.be/elcXviqn0t0?si=MHuI9G2GzaCXaymi 

---

## Features

### Core Functionalities
1. **User Registration and Login**: 
   - Secure user registration.
   - Session management for logged-in users.

2. **Tracking User Visits**:
   - Tracks and logs the user's visits across marketplaces.

3. **Product Reviews and Ratings**:
   - Allows users to add written reviews and star ratings for products.
   - Displays user-submitted reviews dynamically.

4. **Top Products Display**:
   - Displays the top 5 products for each marketplace based on visits.
   - Highlights the top 5 products across all marketplaces on the homepage.

5. **Dynamic Marketplaces**:
   - Provides seamless navigation between multiple marketplaces.

6. **Interactive UI**:
   - Visually appealing UI with smooth animations.
   - Fully responsive design for desktop and mobile devices.

### Additional Features
- Support for multiple rating methods (e.g., star ratings, likes).
- List of most recently visited products for enhanced user experience.

---

## Technology Stack

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: Node.js
- **Database**: MySQL
- **Deployment**: AWS EC2
- **Containerization**: Docker and Docker Compose

---

## Test Cases

### Test Case 1: Register
**Preconditions**:  
User is not registered.  
**Test Steps**:  
1. Launch the website URL.  
2. Enter a valid username in the username field.  
3. Enter a valid password in the password field.  
4. Click on the "Register" button.  
**Expected Result**:  
User is successfully registered and navigated to the login page.

### Test Case 2: User Login and Homepage Access
**Preconditions**:  
User has valid login credentials.  
**Test Steps**:  
1. Launch the website URL.  
2. Enter a valid username in the username field.  
3. Enter a valid password in the password field.  
4. Click on the "Login" button.  
**Expected Result**:  
User is successfully logged in and navigated to the homepage.  

### Test Case 3: Access Multiple Marketplaces
**Preconditions**:  
User is logged in and on the homepage.  
**Test Steps**:  
1. Identify and verify the presence of "Marketplace" buttons on the homepage.  
2. Click on a marketplace button.  
3. Verify if the marketplace page loads successfully.  
4. Repeat for other marketplace buttons to ensure accessibility.  
**Expected Result**:  
Each marketplace page should load successfully with its respective products.  

### Test Case 4: Display of Most Recently Visited Products
**Preconditions**:  
User is logged in and on the homepage.  
**Test Steps**:  
1. Open a marketplace from the homepage.  
2. Navigate to multiple products within the marketplace.  
3. Return to the homepage.  
4. Check if the most recently visited products are displayed on the homepage.  
**Expected Result**:  
The homepage should display a list of the most recently visited products.  

### Test Case 5: Navigate Back to Common Home from Marketplace
**Preconditions**:  
User is inside a marketplace.  
**Test Steps**:  
1. Open a marketplace.  
2. Verify the presence of a "Home" button or navigation link.  
3. Click on the "Home" button.  
4. Verify that the user is redirected to the homepage.  
**Expected Result**:  
User is successfully redirected to the homepage from the marketplace.  

### Test Case 6: Product Visit Count Increment
**Preconditions**:  
User is inside a marketplace.  
**Test Steps**:  
1. Identify a product and note its current visit count.  
2. Click on the product to open its details page.  
3. Return to the marketplace product listing.  
4. Check if the visit count for the product has increased by 1.  
**Expected Result**:  
Product visit count should be incremented by 1 each time it is visited.  

### Test Case 7: Add Review for Product in Marketplace
**Preconditions**:  
User is inside a marketplace and viewing a product details page.  
**Test Steps**:  
1. Open the details page of a specific product.  
2. Scroll down to the "Add Review" section.  
3. Enter the review text in the input field.  
4. Click on the "Submit" button.  
**Expected Result**:  
The review should be submitted successfully and displayed under the product reviews section.  

### Test Case 8: Add Rating for Product in Marketplace
**Preconditions**:  
User is inside a marketplace and viewing a product details page.  
**Test Steps**:  
1. Open the details page of a specific product.  
2. Scroll down to the "Add Rating" section.  
3. Select a star rating (e.g., 1 to 5 stars).  
4. Click on the "Submit" button.  
**Expected Result**:  
The rating should be submitted successfully and displayed under the product ratings section.  

### Test Case 9: Display of Top 5 Products in a Marketplace
**Preconditions**:  
User is inside a marketplace.  
**Test Steps**:  
1. Access the marketplace from the homepage.  
2. Verify if a section is displayed for "Top 5 Products".  
3. Check that the list contains 5 products ranked by the number of visits.  
4. Verify the visit count is displayed for each product.  
**Expected Result**:  
The marketplace should display the top 5 products based on the most visits.  

### Test Case 10: Display of Top 5 Products Across All Marketplaces
**Preconditions**:  
User is logged in and on the homepage.  
**Test Steps**:  
1. From the homepage, check if there is a section for "Top 5 Products Across All Marketplaces".  
2. Verify that the section displays products from all marketplaces.  
3. Check that the products are ranked by the number of visits.  
4. Verify the visit count is displayed for each product.  
**Expected Result**:  
The homepage should display the top 5 products across all marketplaces, ranked by the most visits.  

### Test Case 11: Fancy UI and Visual Interactivity
**Preconditions**:  
User is on the homepage or marketplace page.  
**Test Steps**:  
1. Observe the visual design, animations, and interactivity of UI components (buttons, menus, images, text, etc.).  
2. Verify that animations are smooth and without glitches.  
3. Check responsiveness (UI adjusts correctly to screen size and device).  
4. Verify that interactive elements (like hover, click animations) work as expected.  
**Expected Result**:  
The UI should be visually interactive, responsive, and provide smooth animations for the best customer experience.  

## Reflections  

The Marketplace application is more than a project—it’s a crafted synergy of ideas, collaboration, and technical precision. It embodies our pursuit of designing a platform that not only functions seamlessly but also resonates with its users. Every interaction, every feature, and every detail reflects our commitment to delivering an engaging experience.  

While this marks the culmination of development, it’s also the beginning of what this application can inspire—a digital space where marketplaces and users connect effortlessly, driven by thoughtful design and meaningful innovation.  
