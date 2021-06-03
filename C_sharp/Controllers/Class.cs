using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;

namespace Intro_C_sharp.Controllers
{
    [Route("[controller]")]
    [ApiController]
    public class home : Controller
    {
        [HttpGet("hello")]
        public ActionResult hello()
        {
            var data = new { Etna = "Hello World" };
            return Json(data);
        }
    }
}
