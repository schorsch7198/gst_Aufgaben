# **CSS POSITIONING EXERCISE - Q2**

## **📁 NESTED SQUARES VERSION**
**📄 File**: `Q2-nested-squares.html`
**🎯 Type**: HTML/CSS Positioning Exercise
**💡 Solution**: Container-based approach with nested squares using inset property

### **📋 Overview**
This file demonstrates CSS positioning using a **container element** to create and center a set of nested squares. The outermost square is **400px × 400px** and each inner square is offset by **20px increments**, creating a visually appealing nested effect.

---

### **✅ Features**
- **📦 Uses container** for grouping and centering squares
- **🎯 Perfect centering** of the entire nested structure
- **🔄 Consistent 20px spacing** between each square layer
- **⚙️ Modern CSS techniques** (inset property and :nth-child pseudo-class)
- **📝 Includes student information**
- **✔️ W3C Valid HTML5**


### **🎨 CSS Approach**
1. Container Positioning:
Absolute positioning relative to viewport
Centered using left: 50%, top: 50%
Negative margins (half of width/height) for perfect alignment
Fixed dimensions: 400px × 400px
2. Square Styling:
All squares use absolute positioning within container
inset shorthand controls all four offsets (top, right, bottom, left)
:nth-child() pseudo-class applies incremental spacing
Grey border defines square boundaries
3. Square Dimensions (Calculated):
Square 1: inset: 0 = 400px × 400px
Square 2: inset: 20px = 360px × 360px
Square 3: inset: 40px = 320px × 320px
Square 4: inset: 60px = 280px × 280px
Square 5: inset: 80px = 240px × 240px

### **⚙️ CSS Properties Used**
- Category	    Properties	                    Purpose
- Positioning	position, left, top, inset	    Element placement and centering
- Dimensions	width, height	                Size definition
- Styling	    border	                        Visual boundaries
- Spacing	    margin-left, margin-top	        Centering calculations
- Typography	font-family, font-size, color	Info text styling

### **📋 Instructions**
Save file as Q2.html
Open in any modern web browser
View the perfectly centered nested squares
Modify inset values to adjust spacing
Add/remove .square divs to change number of layers

### **🔑 Key Takeaways**
inset property is a modern shorthand for positioning
:nth-child() pseudo-class enables pattern-based styling
Negative margin centering is a classic technique for fixed-size elements
Container-based design improves maintainability and scalability