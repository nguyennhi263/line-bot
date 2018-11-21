{
"type": "bubble",
"header": {
"type": "box",
"layout": "vertical",
"contents": [
{
"type": "text",
"text": "FIFA World Cup 2018",
"size": "xl",
"weight": "bold"
}
]
},
"hero": {
"type": "image",
"url": "https://sitthi.me:3807/static/fifa.jpg",
"size": "full",
"aspectRatio": "20:13",
"aspectMode": "cover"
},
"body": {
"type": "box",
"layout": "vertical",
"spacing": "md",
"contents": [
{
"type": "box",
"layout": "horizontal",
"spacing": "sm",
"contents": [
{
"type": "text",
"text": "LIVE !",
"size": "lg",
"color": "#555555",
"weight": "bold",
"align": "center"
}
]
},
{
"type": "button",
"style": "primary",
"action": {
"type": "postback",
"label": "Portugal  1 : 0  Morocco",
"displayText": "Live Report !!",
"data": "LIVE"
}
},
{
"type": "separator",
"margin": "lg"
},
{
"type": "box",
"layout": "vertical",
"margin": "lg",
"spacing": "sm",
"contents": [
{
"type": "box",
"layout": "horizontal",
"spacing": "sm",
"contents": [
{
"type": "button",
"style": "primary",
"action": {
"type": "postback",
"label": "Last Match",
"displayText": "Last Match",
"data": "LAST"
}
},
{
"type": "button",
"style": "primary",
"action": {
"type": "postback",
"label": "Next Match",
"displayText": "Next Match",
"data": "NEXT"
}
}
]
},
{
"type": "box",
"layout": "horizontal",
"spacing": "sm",
"contents": [
{
"type": "button",
"style": "primary",
"action": {
"type": "postback",
"label": "Schedule",
"displayText": "Schedule",
"data": "SCHEDULE"
}
},
{
"type": "button",
"style": "primary",
"action": {
"type": "postback",
"label": "Table",
"displayText": "Table",
"data": "TABLE"
}
}
]
}
]
}
]
},
"footer": {
"type": "box",
"layout": "vertical",
"contents": [
{
"type": "button",
"margin": "sm",
"action": {
"type": "uri",
"label": "View Source",
"uri": "https://sitthi.me:3807/downloaded/ba5f784d837540dfb40df2d531d7519c.json"
},
"style": "secondary"
}
]
}
}