const box = document.querySelector("#box");
const widthBox = document.body.clientWidth
const xstart = widthBox/2+100;
const ystart = 500;
var virusLength = 1;
//console.log(document.body.clientHeight);

// Define class

class cell {
    constructor(px,py,mainCell){
        this.px = px;
        this.py = py;
        this.mainCell = mainCell;
        this.pxCell = document.createElement("div");
    }

    deleteCell()
    {
        //Coming soon
    }

    showCell()
    {
        this.pxCell.classList.add("cell");
        this.pxCell.style.left = xstart+6*this.px + "px";
        this.pxCell.style.top = ystart+6*this.py + "px";
        box.appendChild(this.pxCell);
    }

    redCell()
    {
        this.pxCell.style.backgroundColor = "rgb(189, 26, 26)";
    }

}

class virus {

    constructor(mainCell){ 
        this.mainCell = mainCell;
        this.coreVirus = [mainCell];
        this.borderVirus = [mainCell];
        this.stuckVirus = [];
    }

    cellGrowth(activeCell)
    {
        // Varible to know if the active cell have neighbour
        let left = 0;
        let right = 0;
        let top = 0;
        let bot = 0;
        // We're checking the neighbour
        for(let i=0; i < this.coreVirus.length; i++){
            if((this.coreVirus[i].px == activeCell.px) && (this.coreVirus[i].py == (activeCell.py+1))){
                bot = 1;
                //console.log("A neighbour on the bottom !");
            }
            else if((this.coreVirus[i].px == (activeCell.px+1)) && (this.coreVirus[i].py == activeCell.py)){
                right= 1;
                //console.log("A neighbour on the right !");
            }
            else if((this.coreVirus[i].px == (activeCell.px-1)) && (this.coreVirus[i].py == activeCell.py)){
                left = 1;
                //console.log("A neighbour on the left !");
            }
            else if((this.coreVirus[i].px == activeCell.px) && (this.coreVirus[i].py == (activeCell.py-1))){
                top = 1;
                //console.log("A neighbour on the top !");
            }
        }
        let freeCell = 4-left-right-top-bot;
        if(freeCell == 0)
        {
            let pos = this.borderVirus.indexOf(activeCell);
            activeCell.redCell();
            let stuckCell = this.borderVirus.splice(pos,1);
            this.stuckVirus.push(stuckCell);
            virusLength--;

            //console.log("No neighbour",activeCell.py,activeCell.px);
        }
        // If we have neighbour, we process to the growth on a ramdom adjacent box
        if (freeCell != 0)
        {
            let i = 50;
            while(1)
            {
                let g = Math.floor(Math.random()*4+1);
                if(g==1){
                    if(left==0){
                        let newCell = new cell(activeCell.px-1,activeCell.py,this.mainCell);
                        newCell.showCell();
                        this.coreVirus.push(newCell);
                        this.borderVirus.push(newCell);
                        if(freeCell==3) //Boost the solo cell
                        {
                            let newCell = new cell(activeCell.px-2,activeCell.py,this.mainCell);
                            newCell.showCell();
                            this.coreVirus.push(newCell);
                            this.borderVirus.push(newCell);
                        }
                        //console.log("Creation cell on the left");
                        return 1;
                    }
                }
                if(g==2){
                    if(right==0){
                        let newCell = new cell(activeCell.px+1,activeCell.py,this.mainCell);
                        newCell.showCell();
                        this.coreVirus.push(newCell);
                        this.borderVirus.push(newCell);
                        if(freeCell==3) //Boost the solo cell
                        {
                            let newCell = new cell(activeCell.px+2,activeCell.py,this.mainCell);
                            newCell.showCell();
                            this.coreVirus.push(newCell);
                            this.borderVirus.push(newCell);
                        }
                        //console.log("Creation cell on the right");
                        return 1;
                    }
                }
                if(g==3){
                    if(top==0){
                        let newCell = new cell(activeCell.px,activeCell.py-1,this.mainCell);
                        newCell.showCell();
                        this.coreVirus.push(newCell);
                        this.borderVirus.push(newCell);
                        if(freeCell==3) //Boost the solo cell
                        {
                            let newCell = new cell(activeCell.px,activeCell.py-2,this.mainCell);
                            newCell.showCell();
                            this.coreVirus.push(newCell);
                            this.borderVirus.push(newCell);
                        }
                        //console.log("Creation cell on the top");
                        return 1;
                    }
                }
                if(g==4){
                    if(bot==0){
                        let newCell = new cell(activeCell.px,activeCell.py+1,this.mainCell);
                        newCell.showCell();
                        this.coreVirus.push(newCell);
                        this.borderVirus.push(newCell);
                        if(freeCell==3) //Boost the solo cell
                        {
                            let newCell = new cell(activeCell.px,activeCell.py+2,this.mainCell);
                            newCell.showCell();
                            this.coreVirus.push(newCell);
                            this.borderVirus.push(newCell);
                        }
                        //console.log("Creation cell on the bottom")
                        return 1;
                    }
                }
                i--;
                return i;
            }
            
        }
    }   
    
    cellDev(activeCell)
    {
        let age = this.coreVirus.length - this.coreVirus.indexOf(activeCell);
        let coeff = Math.exp(-age/5+10)+0.52;
        //let coeff = 5*Math.exp(-age/5)+0.4 //Other possible equation
        let r = Math.floor(Math.random()*100*coeff);

        if(r==0) // Decay
        {  
            //Coming Soon
            /*let pos = this.coreVirus.indexOf(activeCell);
            console.log(pos);
            let deletedCell = this.coreVirus.splice(pos,1);
            console.log("Decay");
            console.log(deletedCell[0]);*/
        }
        else if(r>0 && r<=50) // Stuck
        {
            //console.log("Stuck");
        }
        else if(r>50) //Growth
        {
            this.cellGrowth(activeCell);
            //console.log("Growth");
        }
        else{
            console.log("Error cell development");
        }
    }

    spreadVirus(speed)
    {
        virusLength = this.borderVirus.length;
        for(let i=0; i < virusLength; i++){
            if(6*this.borderVirus[i].py<-490 || 6*this.borderVirus[i].py> 440 || 6*this.borderVirus[i].px>(widthBox/2-10))
            {
                let pos = this.borderVirus.indexOf(this.borderVirus[i]);
                this.borderVirus[i].redCell();
                let stuckCell = this.borderVirus.splice(pos,1);
                this.stuckVirus.push(stuckCell);
                virusLength--;
            }
            this.cellDev(this.borderVirus[i]);
        }
        speed=speed-(Math.exp(speed/100)/80+2); // Equation to try to stabilize the speed
        //console.log(speed);
        setTimeout(function (){v1.spreadVirus(speed);},speed);
    }
}


// Test Part

c1 = new cell(0,0,null)
c1.showCell();
v1 = new virus(c1);
let initSpeed = 1000;
v1.spreadVirus(initSpeed);




//Other possibility
//setInterval(function (){v1.spreadVirus();},10);
//setInterval(function (){v1.spreadVirus();},0.2);


