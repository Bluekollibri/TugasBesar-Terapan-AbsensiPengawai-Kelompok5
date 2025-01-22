* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    line-height: 1.6;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: #333;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px;
}

.container {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    width: 100%;
    max-width: 600px;
    padding: 30px;
}

#title {
    text-align: center;
    color: #4a4a4a;
    margin-bottom: 15px;
    font-size: 2.5rem;
}

#description {
    text-align: center;
    color: #666;
    margin-bottom: 30px;
    font-style: italic;
}

#survey-form {
    display: flex;
    flex-direction: column;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #333;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="number"],
select,
textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
select:focus,
textarea:focus {
    outline: none;
    border-color: #667eea;
    box-shadow: 0 0 5px rgba(102, 126, 234, 0.5);
}

.radio-group,
.checkbox-group {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
}

.radio-group label,
.checkbox-group label {
    display: flex;
    align-items: center;
    cursor: pointer;
}

input[type="radio"],
input[type="checkbox"] {
    margin-right: 8px;
}

textarea {
    resize: vertical;
    min-height: 100px;
}

#submit {
    background-color: #667eea;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#submit:hover {
    background-color: #5a4fd1;
}

@media (max-width: 600px) {
    .container {
        padding: 20px;
        margin: 0 10px;
    }

    .radio-group,
    .checkbox-group {
        flex-direction: column;
    }
}