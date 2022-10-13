const express = require("express");
const bodyParser = require("body-parser");

const app = express();

app.use(bodyParser.urlencoded({extended: true}));

app.get("/", function(req, res) {
    res.sendFile(__dirname + "/index.html");
});

app.post("/", function(req, res) {
    var result = Number(req.body.n1) + Number(req.body.n2);
    res.send("Addition of both numbers is:" + result);
});

app.listen("3000", function(){
    console.log("Server is Running on Port: 3000");
});